<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetTakAlih;
use App\Models\BahagianUnit;
use App\Models\Lokasi;
use App\Models\Keutamaan;
use App\Models\StatusAduan;
use App\Models\Jawatan;
use App\Models\SkopPerkhidmatan;
use App\Models\ModAduan;
use App\Models\Aras;
use App\Models\User;
use App\MissingUser;
use DB;
use PDF;
use App\Models\SiasatanPenyelenggaraan;

class SiasatanPenyelenggaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add(Request $request, $id)
    {
        $data_laporrosak = AsetTakAlih::find($id);
        $title = "Edit Rekod Aduan Kerosakan";
       
 
        return view('siasatan_penyelenggaraan.tindakan_siasat',compact(
            'data_laporrosak',
            'title'
        ));
    }
    
    public function store(Request $request)
    {
        
        $data['id_no_aduan'] = $request->id_no_aduan;
        $data['id_nama_pengadu'] = $request->id_nama_pengadu;       
       
       

        SiasatanPenyelenggaraan::insert($data);
        
        
        \Session::flash('sukses','Data berjaya ditambah');
    
        return redirect('asettakalih');
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
        $data_laporrosak = AsetTakAlih::find($id);
        $title = "Edit Rekod Aduan Kerosakan";
        //$data_aduanrosak = AsetTakAlih::find($id);
        $data_bahagian_unit = BahagianUnit::all();
        $data_pengguna = User::all();       
        $data_lokasi = Lokasi::all();
        $data_status = StatusAduan::all();
        $data_keutamaan = Keutamaan::all();       
        $data_jawatan = Jawatan::all();
        $data_skop_perkhidmatan = SkopPerkhidmatan::all();
        $data_mod_aduan = ModAduan::all();
        $data_aras = Aras::all();
        $data_jawatan = Jawatan::all();
 
        return view('siasatan_penyelenggaraan.tindakan_siasat',compact(
            'data_laporrosak',
            'title',
            //'data_aduanrosak',
            'data_bahagian_unit',
            'data_skop_perkhidmatan',
            'data_pengguna',
            'data_lokasi',
            'data_status',
            'data_mod_aduan',
            'data_keutamaan',
            'data_jawatan',
            'data_aras'
        ));
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
        $data['id_no_aduan'] = $request->id_no_aduan;
        $data['id_nama_pengadu'] = $request->id_nama_pengadu;  
        // $data['jawatan_id'] = $request->jawatan_id;      
        // $data['catatan_pengadu'] = $request->catatan_pengadu; 
        // $data['catatan_penerima'] = $request->catatan_penerima;
        $data['updated_at'] = date('Y-m-d H:i:s');

        SiasatanPenyelenggaraan::where('id',$id)->update($data);

       \Session::flash('sukses','Data telah dikemaskini');
 
        return redirect('asettakalih');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
