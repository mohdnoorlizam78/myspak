<?php
    
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Gate;
use Symfony\Component\HttpFoundation\Response;
    
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        //  $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        //  $this->middleware('permission:role-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        abort_if(Gate::denies('roles_index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('roles.index',compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('roles_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $permission = Permission::get();
        return view('roles.create',compact('permission'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('roles_store'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
    
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index')
                        ->with('success','Role created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('roles_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_roles = Role::find($id);
        return view('roles.show',([
            'data_roles'=>$data_roles
            ]));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('roles_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_roles = Role::find($id);
        $data_permissions = Permission::all()->pluck('name', 'id');

        $data_roles->load('permissions');
       
        return view('roles.edit',[
            'data_roles'=>$data_roles,
            'data_permissions'=>$data_permissions
            ]);
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
        // $this->validate($request, [
        //     'name' => 'required',
        //     'permission' => 'required',
        // ]);
    
        // $role = Role::find($id);
        // $role->name = $request->input('name');
        // $role->save();
    
        // $role->syncPermissions($request->input('permission'));
    
        // return redirect()->route('roles.index')
        //                 ->with('success','Role updated successfully');
        abort_if(Gate::denies('roles_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_roles = Role::find($id);
        $data_roles->update($request->all());
        $data_roles->permissions()->sync($request->input('permissions', []));

        if($data_roles){
            $update = redirect('roles')->with('success','Data berjaya dikemaskini');
        }else{
            $update = redirect('roles/edit/', [$id])->with('danger', 'Kemaskini gagal! Cuba sekali lagi');
        }
       
        return $update;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('roles_destroy'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')
                        ->with('success','Role deleted successfully');
    }
    public function delete(Request $request)
    {
        abort_if(Gate::denies('roles_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $del = $request->delete;
         //nak periksa data delete
        //print_r($del);
        if($del)
        {
            foreach($del as $delete){
                DB::table('roles')->where('id', $delete)->delete();
            }
            return back();
        }
        else{
            return back();
        }
    }
}