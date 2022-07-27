<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use DB;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$dataalbum =DB::table("album")->get();
        $dataalbum = Album::orderBy('created_at','desc')->get();
        return view('gambar.index', compact('dataalbum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gambar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataalbum = DB::table("album")->insert(
            [
                "nama_gambar"=>$request->nama_gambar,
                "gambar1" => $request->gambar1
            ]
            );

        return redirect('gambar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataalbum = Album::find($id);
       
        return view('gambar.edit',['dataalbum'=>$dataalbum]);
        
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
        $this->validate($request,[
            //"nama_gambar"=> "required|min:10|max:15"
            "nama_gambar"=> "required"
            //"gambar"
        ]);

        $gambar1 = $request->gambar->getClientOriginalName()."-".time();
        $request->gambar->move(public_patch("gambar"), $gambar1);

        //$dataalbum = Album::find($id);
        // $dataalbum->update([
        //     'nama_gambar' => request('nama_gambar')           
        // ]);//boleh guna kaedah ini
        //$dataalbum->update($request->all());
        $dataalbum = DB::table("album")->where('id', $request->id)->update([
            "nama_gambar"=> $request->nama_gambar,
            "gambar1" => $request->gambar1
        ]);

        if($dataalbum){
            $updategambar = redirect('gambar')->with('berjaya','Data berjaya dikemaskini');
        }else{
            $updategambar = redirect('gambar/edit/', [$id])->with('danger', 'Kemaskini gagal! Cuba sekali lagi');
        }
       
        return $updategambar;
        // return redirect('gambar')->with('kemaskini','Data berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('album')->where('id',$id)->delete(); // boleh guna kaedah ini
        Album::where('id', $id)->delete();
        return redirect('gambar');
    }
}
