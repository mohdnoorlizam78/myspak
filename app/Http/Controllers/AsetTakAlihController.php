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
use App\Models\JenisKerja;
use App\Models\Tindakan;
use App\MissingUser;
use DB;
use PDF;
use Gate;
use File;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class AsetTakAlihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('asettakalih_index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_rosak = AsetTakAlih::orderBy('created_at','desc')->get();
        $customer = User::orderBy('id','asc')->get();
        $data_bahagian_unit = BahagianUnit::orderBy('nama_bahagian','asc')->get();        
        $data_lokasi = Lokasi::orderBy('nama_lokasi','asc')->get();        
        $data_keutamaan = Keutamaan::orderBy('nama_keutamaan','asc')->get(); 
        $data_skop_perkhidmatan = SkopPerkhidmatan::orderBy('nama_skop','asc')->get();
        $data_mod_aduan = ModAduan::orderBy('nama_mod','asc')->get();
        $data_aras = Aras::orderBy('nama_aras','asc')->get();
        $data_jawatan = Jawatan::orderBy('nama_jawatan','asc')->get();
        $data_rosak_selesai = AsetTakAlih::whereHas('status_aduan', function($query) {
            $query->whereNamaStatus('Selesai');
            })->count();
        
        $data_rosak_belum_selesai = AsetTakAlih::whereHas('status_aduan', function($query) {
        $query->whereNamaStatus('Belum selesai');
        })->count();
        
        $data_rosak_dalam_proses = AsetTakAlih::whereHas('status_aduan', function($query) {
                $query->whereNamaStatus('Dalam tindakan');
                })->count();

        $data_rosak_belum_selesai_papar = AsetTakAlih::whereHas('status_aduan', function($query) {
        $query->where('status_id', '=', 2);
        })->get();
         
 
        return view('asettakalih.index',compact(
            'data_rosak',
            'data_bahagian_unit',
            'data_lokasi',
            'data_keutamaan',
            'customer',
            'data_skop_perkhidmatan',
            'data_mod_aduan',
            'data_aras',
            'data_jawatan',
            'data_rosak_selesai',
            'data_rosak_belum_selesai',
            'data_rosak_dalam_proses',
            'data_rosak_belum_selesai_papar'
        ));
    }

    public function periode(Request $request)
    {
        
        $data_rosak_selesai = AsetTakAlih::whereHas('status_aduan', function($query) {
            $query->whereNamaStatus('Selesai');
            })->count();
            
            $data_rosak_belum_selesai = AsetTakAlih::whereHas('status_aduan', function($query) {
                $query->whereNamaStatus('Belum selesai');
                })->count();
                
            $data_rosak_dalam_proses = AsetTakAlih::whereHas('status_aduan', function($query) {
                    $query->whereNamaStatus('Dalam tindakan');
                    })->count();
    
            $data_rosak_belum_selesai_papar = AsetTakAlih::whereHas('status_aduan', function($query) {
            $query->where('status_id', '=', 2);
            })->get();

        try {
            $dari = $request->dari;
            $sampai = $request->sampai;
 
            // $title = "Rekod rosak dari $dari sampai $sampai";
 
            $data_rosak = AsetTakAlih::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->get();
 
            return view('asettakalih.index',compact(
                'data_rosak',
                'data_rosak_selesai',
                'data_rosak_belum_selesai',
                'data_rosak_dalam_proses',
                'data_rosak_belum_selesai_papar'
            ));
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
 
            return redirect()->back();
        }
    }

    public function add(Request $request)
    {
        abort_if(Gate::denies('asettakalih_add'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = 'Tambah Rekod Aduan Kerosakan';
        $data_rosak = AsetTakAlih::orderBy('created_at','desc')->get();
        $customer = User::orderBy('id','asc')->get();
        $data_bahagian_unit = BahagianUnit::orderBy('nama_bahagian','asc')->get();        
        $data_lokasi = Lokasi::orderBy('nama_lokasi','asc')->get();        
        $data_keutamaan = Keutamaan::orderBy('nama_keutamaan','asc')->get(); 
        $data_skop_perkhidmatan = SkopPerkhidmatan::orderBy('nama_skop','asc')->get();
        $data_mod_aduan = ModAduan::orderBy('nama_mod','asc')->get();
        $data_aras = Aras::orderBy('nama_aras','asc')->get();
        $data_jawatan = Jawatan::orderBy('nama_jawatan','asc')->get();
       
    
        return view('asettakalih.add',compact(
            'title',
            'data_bahagian_unit',
            'data_lokasi',
            'data_keutamaan',
            'customer',
            'data_skop_perkhidmatan',
            'data_mod_aduan',
            'data_aras',
            'data_jawatan'
        ));
    }
    
    public function store(Request $request)
    {
        abort_if(Gate::denies('asettakalih_store'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->validate($request,[
            
            'keterangan_rosak'=>'required',
            'bahagian_unit_id'=>'required',
            'lokasi_id'=>'required',
            'keutamaan_id'=>'required'
            //'lokasi_lain'=>'required'
            // 'muatturun'=>'required',
            // 'gambar_1'=>'required',
            // 'gambar_2'=>'required'
        ]);

        
        // $file1 = $request-> muatturun;
       
        //     $nama_file = time().rand(100,999).".". $file1->getClientOriginalName();
        //     $data = new LaporRosak;
        //     $data->muatturun = $nama_file;
        //     $file1->move(public_path().'/aduanrosak', $nama_file );

        $data['id'] = \Uuid::generate(4);
        //$data['no_aduan'] = $request->no_aduan;
        $data['nama_pelapor_id'] = $request->nama_pelapor_id;
        $data['no_tel'] = $request->no_tel;
        $data['bahagian_unit_id'] = $request->bahagian_unit_id;
        $data['premis'] = $request->premis;
        $data['no_dpa'] = $request->no_dpa;
        $data['skop_perkhidmatan_id'] = $request->skop_perkhidmatan_id;
        $data['lain_skop'] = $request->lain_skop;
        $data['mod_aduan_id'] = $request->mod_aduan_id;
        $data['lain_mod'] = $request->lain_mod;
        $data['lokasi_id'] = $request->lokasi_id;
        $data['lokasi_lain'] = $request->lokasi_lain;
        $data['aras_id'] = $request->aras_id;
        $data['nama_no_bilik'] = $request->nama_no_bilik;
        $data['keutamaan_id'] = $request->keutamaan_id;       
        $data['keterangan_rosak'] = $request->keterangan_rosak; 
        $data['catatan_pengadu'] = $request->catatan_pengadu;     
        $data['catatan_penerima'] = $request->catatan_penerima;   
        $data['status_id'] = $request->status_id;       
        // $data['muatturun'] = $request->file('muatturun')->getClientOriginalName();
        // $request->file('muatturun')->move(public_path().'/aduanrosak', $request->file('muatturun')->getClientOriginalName() );
        
      
        $data['gambar_1'] = $request->gambar_1;
        if($request->hasFile('gambar_1')) {

            $request->file('gambar_1')->move('public/aduanrosak/', time().'_'.$request->file('gambar_1')->getClientOriginalName());
            $data_borang->muatturun = time().'_'.$request->file('gambar_1')->getClientOriginalName();

            $data['gambar_1']->save();

            }
/*
        $data['gambar_1'] = $request->file('gambar_1')->getClientOriginalName();
        if($request->hasFile('gambar_1')) {
            $request->file('gambar_1')->move('public/aduanrosak/', $request->file('gambar_1')->getClientOriginalName() );
        }
       
       
        $data['gambar_2'] = $request->file('gambar_2')->getClientOriginalName();
        $request->file('gambar_2')->move('public/aduanrosak/', $request->file('gambar_2')->getClientOriginalName() );
       */

        /*
        $data['gambar_2'] = $request->file('gambar_2')->getClientOriginalName();
        $request->file('gambar_2')->move(public_path().'public/aduanrosak/', $request->file('gambar_2')->getClientOriginalName() );
        */
        
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
       

        AsetTakAlih::insert($data);
        
        
        \Session::flash('sukses','Data berjaya ditambah');
    
        return redirect('asettakalih');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('asettakalih_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = 'Rekod Kerosakan';
        return view('asettakalih.show', ['data_laporrosak' => AsetTakAlih::findOrFail($id),'title'=>$title]);
    }

    public function paparan($id)
    {
        abort_if(Gate::denies('asettakalih_paparan'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = 'Rekod Kerosakan';
        return view('asettakalih.paparan', ['data_laporrosak' => AsetTakAlih::findOrFail($id),'title'=>$title]);
    }

     // PDF generate
    public function pdf(Request $request)
    {
        abort_if(Gate::denies('asettakalih_pdf'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_rosak=AsetTakAlih::getAllOrder($request->id);
        // return $order;
        //$file_name=$order->order_number.'-'.$order->first_name.'.pdf';
        // return $file_name;
        $pdf=PDF::loadview('asettakalih.pdf',compact('data_rosak'));
        //return $pdf->download($file_name);
        return $pdf->stream('laporan_rosak_aset_tak_alih.pdf');
    }

    // public function generatePDF()

    // {        
        
    //     $pdf = PDF::loadView('asettakalih.laporan-pdf');
    //     // return $pdf->download('laporan-pdf.pdf');
    //     return $pdf->stream('laporan_rosak.pdf');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('asettakalih_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $dt = AsetTakAlih::find($id);
        $title = "Edit Rekod Aduan Kerosakan";
        //$data_aduanrosak = AsetTakAlih::find($id);
        $data_bahagian_unit = BahagianUnit::all();
        //$data_pengguna = User::all();       
        $data_pengguna = User::orderBy('name','asc')->get();
        $data_lokasi = Lokasi::all();
        $data_status = StatusAduan::all();
        $data_keutamaan = Keutamaan::all();       
        $data_jawatan = Jawatan::all();
        $data_skop_perkhidmatan = SkopPerkhidmatan::all();
        $data_mod_aduan = ModAduan::all();
        $data_aras = Aras::all();
        $data_jawatan = Jawatan::all();
        $data_jeniskerja = JenisKerja::all();
        $data_tindakan = Tindakan::all();
 
        return view('asettakalih.edit',compact(
            'dt',
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
            'data_aras',
            'data_jeniskerja',
            'data_tindakan'
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
        abort_if(Gate::denies('asettakalih_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data['no_aduan'] = $request->no_aduan;
        //$data['nama_pelapor_id'] = $request->nama_pelapor_id;
        $data['no_tel'] = $request->no_tel;
        //$data['bahagian_unit_id'] = $request->bahagian_unit_id;
        //$data['skop_perkhidmatan_id'] = $request->skop_perkhidmatan_id;
        $data['lain_skop'] = $request->lain_skop;
        //$data['mod_aduan_id'] = $request->mod_aduan_id;
        $data['lain_mod'] = $request->lain_mod;
        //$data['keutamaan_id'] = $request->keutamaan_id;
        //$data['lokasi_id'] = $request->lokasi_id;
        $data['lokasi_lain'] = $request->lokasi_lain;
        //$data['aras_id'] = $request->aras_id;
        $data['nama_no_bilik'] = $request->nama_no_bilik;
        $data['nama_no_bilik'] = $request->nama_no_bilik;
        $data['catatan_pengadu'] = $request->catatan_pengadu; 
        $data['pegawai_penerima_id'] = $request->pegawai_penerima_id; 
        $data['jawatan_id'] = $request->jawatan_id;
        $data['status_id'] = $request->status_id;
        $data['tindakan_id'] = $request->tindakan_id;
        $data['catatan_penerima'] = $request->catatan_penerima;
        $data['updated_at'] = date('Y-m-d H:i:s');

        AsetTakAlih::where('id',$id)->update($data);

       \Session::flash('sukses','Data telah dikemaskini');
 
        return redirect('asettakalih');
    }
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        abort_if(Gate::denies('asettakalih_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        AsetTakAlih::where('id', $id)->delete();

        \Session::flash('sukses','Data berjaya dihapuskan');
        return redirect('asettakalih');
    }
    public function tindakanindex()
    {
        abort_if(Gate::denies('asettakalih_tindakanindex'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $data_rosak = AsetTakAlih::orderBy('created_at','desc')->get();
        $customer = User::orderBy('id','asc')->get();
        $data_bahagian_unit = BahagianUnit::orderBy('nama_bahagian','asc')->get();        
        $data_lokasi = Lokasi::orderBy('nama_lokasi','asc')->get();        
        $data_keutamaan = Keutamaan::orderBy('nama_keutamaan','asc')->get(); 
        $data_skop_perkhidmatan = SkopPerkhidmatan::orderBy('nama_skop','asc')->get();
        $data_mod_aduan = ModAduan::orderBy('nama_mod','asc')->get();
        $data_aras = Aras::orderBy('nama_aras','asc')->get();
        $data_jawatan = Jawatan::orderBy('nama_jawatan','asc')->get();
        $data_rosak_selesai = AsetTakAlih::whereHas('status_aduan', function($query) {
            $query->whereNamaStatus('Selesai');
            })->count();
        
        $data_rosak_belum_selesai = AsetTakAlih::whereHas('status_aduan', function($query) {
        $query->whereNamaStatus('Belum selesai');
        })->count();
        
        $data_rosak_dalam_proses = AsetTakAlih::whereHas('status_aduan', function($query) {
                $query->whereNamaStatus('Dalam tindakan');
                })->count();

        $data_rosak_belum_selesai_papar = AsetTakAlih::whereHas('status_aduan', function($query) {
        $query->where('status_id', '=', 2);
        })->get();
         
 
        return view('asettakalih/tindakan/index',compact(
            'data_rosak',
            'data_bahagian_unit',
            'data_lokasi',
            'data_keutamaan',
            'customer',
            'data_skop_perkhidmatan',
            'data_mod_aduan',
            'data_aras',
            'data_jawatan',
            'data_rosak_selesai',
            'data_rosak_belum_selesai',
            'data_rosak_dalam_proses',
            'data_rosak_belum_selesai_papar'
        ));
    }

    public function periodetindakan(Request $request)
    {
        
        $data_rosak_selesai = AsetTakAlih::whereHas('status_aduan', function($query) {
            $query->whereNamaStatus('Selesai');
            })->count();
        
        $data_rosak_belum_selesai = AsetTakAlih::whereHas('status_aduan', function($query) {
        $query->whereNamaStatus('Belum selesai');
        })->count();
        
        $data_rosak_dalam_proses = AsetTakAlih::whereHas('status_aduan', function($query) {
                $query->whereNamaStatus('Dalam tindakan');
                })->count();

        $data_rosak_belum_selesai_papar = AsetTakAlih::whereHas('status_aduan', function($query) {
        $query->where('status_id', '=', 2);
        })->get();
         
        try {
            $dari = $request->dari;
            $sampai = $request->sampai;
 
            // $title = "Rekod rosak dari $dari sampai $sampai";
 
            $data_rosak = AsetTakAlih::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->get();
 
            return view('asettakalih/tindakan/index',compact(
                'data_rosak',
                'data_rosak_selesai',
                'data_rosak_belum_selesai',
                'data_rosak_dalam_proses',
                'data_rosak_belum_selesai_papar'));
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
 
            return redirect()->back();
        }
    }

    public function edittindakan($id)
    {
        abort_if(Gate::denies('asettakalih_edittindakan'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        abort_if(Gate::denies('asettakalih_tindakan'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$data_tindakan_rosak=AsetTakAlih::getAllOrder($request->id);
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
        $data_jeniskerja = JenisKerja::all();
 
        return view('asettakalih/tindakan/edittindakan',compact(
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
            'data_aras',
            'data_jeniskerja'           
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatetindakan(Request $request, $id)
    {
        // request()->validate([
        //     'jenis_kerja_id' => 'required',
        //     'ditugaskan_id' => 'required',
        // ]);
        abort_if(Gate::denies('asettakalih_updatetindakan'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data['jenis_kerja_id'] = $request->jenis_kerja_id;
        $data['ditugaskan_id'] = $request->ditugaskan_id;         
        $data['tarikh_ditugaskan'] = $request->tarikh_ditugaskan; 
        $data['masa_ditugaskan'] = $request->masa_ditugaskan;
        $data['ulasan_rosak'] = $request->ulasan_rosak;
        $data['jenis_alat_ganti'] = $request->jenis_alat_ganti;
        $data['keterangan_alat_ganti'] = $request->keterangan_alat_ganti;
        $data['harga_seunit_alat'] = $request->harga_seunit_alat;
        $data['kuantiti_alat'] = $request->kuantiti_alat;
        $data['jumlah_alat'] = $request->jumlah_alat;
        $data['perihal_kerja'] = $request->perihal_kerja;
        $data['tarikh_mula'] = $request->tarikh_mula;
        $data['tarikh_siap'] = $request->tarikh_siap;
        $data['nama_kontraktor'] = $request->nama_kontraktor;
        $data['tarikh_mula_kon'] = $request->tarikh_mula_kon;
        $data['tarikh_siap_kon'] = $request->tarikh_siap_kon;
        $data['kos_akhir'] = $request->kos_akhir;
        $data['tempoh_tanggungan'] = $request->tempoh_tanggungan;
        $data['updated_at'] = date('Y-m-d H:i:s');

    AsetTakAlih::where('id',$id)->update($data);
    //$product->update($request->all());
    
        return redirect('asettakalih/tindakan/');
    }

     // PDF generate
    public function tindakanpdf(Request $request)
    {
        abort_if(Gate::denies('asettakalih_tindakanpdf'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_tindakan_rosak=AsetTakAlih::getAllOrder($request->id);
        // return $order;
        //$file_name=$order->order_number.'-'.$order->first_name.'.pdf';
        // return $file_name;
        $pdf=PDF::loadview('asettakalih/tindakan/pdf',compact('data_tindakan_rosak'));
        //return $pdf->download($file_name);
        return $pdf->stream('laporan_rosak_aset_tak_alih.pdf');
    }

    public function tindakan($id)
    {
        abort_if(Gate::denies('asettakalih_tindakan'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$data_tindakan_rosak=AsetTakAlih::getAllOrder($request->id);
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
        $data_jeniskerja = JenisKerja::all();
 
        return view('asettakalih.tindakan',compact(
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
            'data_aras',
            'data_jeniskerja'           
        ));
    }
}
