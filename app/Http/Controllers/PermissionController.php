<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use DB;
use Gate;
use Symfony\Component\HttpFoundation\Response;
// use App\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('kebenaran_index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = 'Konfigurasi Kebenaran';
        $data_permission = Permission::orderBy('id', 'desc')->get();
        
        return view('permissions.index',compact('title','data_permission'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        abort_if(Gate::denies('kebenaran_add'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = 'Tambah Rekod Kebenaran';
        $data_permission = Permission::orderBy('id', 'desc')->get();
         

        return view('permissions.add',compact('title','data_permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('kebenaran_store'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       // $data['id'] = $request->id;
        $data['name'] = $request->name;
        $data['guard_name'] = 'web';
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
         
        Permission::insert($data);
        
        \Session::flash('sukses','Data berjaya ditambah');
    
        return redirect('permissions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('kebenaran_show'), Response::HTTP_FORBIDDEN, '403 Forbidden'); 
        $title = 'Konfigurasi Kebenaran';
        $data_permission = Permission::find($id);
        return view('permissions.show',compact('title','data_permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('kebenaran_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden'); 
        $title = "Edit Kebenaran";
        $data_permission = Permission::find($id);
       
        return view('permissions.edit',['data_permission'=>$data_permission,'title'=>$title]);
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
        abort_if(Gate::denies('kebenaran_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_permission = Permission::find($id);
        $data_permission->update($request->all());

        if($data_permission){
            $red = redirect('permissions')->with('berjaya','Data berjaya dikemaskini');
        }else{
            $red = redirect('permissions/edit/', [$id])->with('danger', 'Kemaskini gagal! Cuba sekali lagi');
        }
       
        return $red;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function delete($id)
    {
        abort_if(Gate::denies('kebenaran_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Permission::where('id', $id)->delete();

        \Session::flash('sukses','Data berjaya dihapuskan');
        return redirect('permissions');
    }

        

}
