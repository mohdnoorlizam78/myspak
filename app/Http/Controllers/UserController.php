<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Gate;
use Symfony\Component\HttpFoundation\Response;
    
    
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data = User::orderBy('id','DESC')->paginate(5);
         
        // return view('users.index',compact('data'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
        abort_if(Gate::denies('pengguna_index'), Response::HTTP_FORBIDDEN, '403 Forbidden');   
        
        $data = User::orderBy('name', 'desc')->get();

        return view('users.index',compact('data'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('pengguna_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('pengguna_store'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('pengguna_papar'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = User::find($id);
        // $roles = Role::pluck('name','name')->all();
        // $userRole = $user->roles->pluck('name','name')->all();
    
        // return view('users.edit',compact('user','roles','userRole'));
        abort_if(Gate::denies('pengguna_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_pengguna = User::find($id);
        $data_roles = Role::all()->pluck('name', 'id');

        $data_pengguna->load('roles');

        return view('users.edit', ['data_pengguna'=>$data_pengguna,'data_roles'=>$data_roles]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        abort_if(Gate::denies('pengguna_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('pengguna_buang'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

    public function delete(Request $request)
    {
        abort_if(Gate::denies('pengguna_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $del = $request->delete;
         //nak periksa data delete
        //print_r($del);
        if($del)
        {
            foreach($del as $delete){
                DB::table('users')->where('id', $delete)->delete();
            }
            return back();
        }
        else{
            return back();
        }
    }

    public function editprofile($id)
    {
        //abort_if(Gate::denies('pengguna_editprofile'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = "Edit Katalaluan";
        $data_pengguna = User::find($id);

        return view('users.editprofile', ['data_pengguna'=>$data_pengguna]);
    }
    public function updatePassword(Request $request, $id)
    {
        //abort_if(Gate::denies('pengguna_updatePassword'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_pengguna = User::find($id);
        $data_pengguna->update($request->all());
       

        if($data_pengguna){
            $red = redirect('dashboard')->with('berjaya','Data berjaya dikemaskini');
        }else{
            $red = redirect('dashboard/editprofile/', [$id])->with('danger', 'Kemaskini gagal! Cuba sekali lagi');
        }
       
        return $red;
    }
}