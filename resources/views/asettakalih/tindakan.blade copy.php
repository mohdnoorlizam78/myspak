@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('asettakalih')}}">Aduan Kerosakan Aset Tak Alih
aset tak alih</a></li>
    <li class="breadcrumb-item active">Terperinci</li>
</ol>

 
<div class="container-fluid">

            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3"><h3 class="card-title">Status Aduan</h3></li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="false">JKR.PATA.F7/2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">JKR.PATA.F7/4</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Messages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="true">Settings</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                  <div class="card">
 
 <div class="card-header">
     <table style="width: 100%;">
         <tbody>
             <tr>
                 <td style="width: 100%;">
                     <div style="text-align: center;"><span style=' font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>TATACARA PENGURUSAN ASET TAK ALIH</span></div>
                 </td>
             </tr>
             <tr>
                 <td style="width: 100%;">
                     <div style="text-align: center;"><span style='font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>BORANG ADUAN / PERMINTAAN PELANGGAN</span></div>
                 </td>
             </tr>
         </tbody>
     </table>

 
 </div>
    <div class="card-body">
        <table style="width: 80%;">
     <tbody>
         <div style="text-align:right;">
             <a href="{{ url('asettakalih/pdf', $data_laporrosak->id) }}" target="_blank"  class="btn btn-app bg-danger" >                   
                 <i class="fas fa-file-pdf"></i> PDF
             </a>
             
         </div>
         
        <tr>
             <td style="width: 10%;">No. Aduan</td>
             <td style="width: 50%;">: {{$data_laporrosak->no_aduan}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Nama Pelapor</td>
             <td style="width: 50%;">: {{$data_laporrosak->users->name}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">No. Telefon</td>
             <td style="width: 50%;">: {{$data_laporrosak->no_tel}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Bahagian / Unit</td>
             <td style="width: 50%;">: {{$data_laporrosak->bhgn_unit->nama_bahagian}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Premis</td>
             <td style="width: 50%;">: Institut Latihan PErindustrian Selandar</td>
         </tr>
         <tr>
             <td style="width: 10%;">No. DPA</td>
             <td style="width: 50%;">: 1114111MYS.040214.BE0001</td>
         </tr>
         <tr>
             <td style="width: 10%;">Tarikh/Masa</td>
             <td style="width: 50%;">: {{$data_laporrosak->created_at}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Skop Perkhidmatan</td>
             <td style="width: 50%;">: {{$data_laporrosak->s_perkhidmatan->nama_skop}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Lain-lain Skop Perkhidmatan</td>
             <td style="width: 50%;">: {{$data_laporrosak->lain_skop}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Mod Aduan</td>
             <td style="width: 50%;">: {{$data_laporrosak->m_aduan->nama_mod}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Lain-lain Mod Aduan</td>
             <td style="width: 50%;">: {{$data_laporrosak->lain_mod}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Keutamaan</td>
             <td style="width: 50%;">: {{$data_laporrosak->keutamaan->nama_keutamaan}}</td>
         </tr>
     </tbody>
 </table>
 <p><br></p>
 <p>CATATAN ADUAN</p>
 <table style="width: 100%;">
     <tbody>
         <tr>
             <td style="width: 10%;">Lokasi</td>
             <td style="width: 50%;">: {{$data_laporrosak->lokasi->nama_lokasi}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Lain-lain lokasi</td>
             <td style="width: 50%;">: {{$data_laporrosak->lokasi_lain}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Aras</td>
             <td style="width: 50%;">: {{$data_laporrosak->aras->nama_aras}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Nama / No Bilik (Jika ada)</td>
             <td style="width: 50%;">: {{$data_laporrosak->nama_no_bilik}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Keterangan kerosakan</td>
             <td style="width: 50%;">: {{$data_laporrosak->keterangan_rosak}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Gambar kerosakan</td>
             <td style="width: 50%;">: 
             Gambar 1 <img src="{{asset('aduanrosak/'. $data_laporrosak->gambar_1)}}" class="img-responsive" alt="Image" width="400" height="300"> 
             &nbsp &nbsp Gambar 2 &nbsp<img src="{{asset('aduanrosak/'. $data_laporrosak->gambar_2)}}" class="img-responsive" alt="Image" width="400" height="300">
             </td>
         </tr>
         <tr>
             <td style="width: 10%;">Catatan Pengadu</td>
             <td style="width: 50%;">: {{$data_laporrosak->catatan_pengadu}}</td>
         </tr>
         
         <tr>
             <td style="width: 10%;">Nama Penerima</td>
             <td style="width: 50%;">: {{$data_laporrosak->getPegawaiterima->name}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Jawatan</td>
             <td style="width: 50%;">: {{$data_laporrosak->getJawatan->nama_jawatan}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Tarikh/Masa</td>
             <td style="width: 50%;">: {{$data_laporrosak->updated_at}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Catatan Penerima</td>
             <td style="width: 50%;">: {{$data_laporrosak->catatan_penerima}}</td>
         </tr>
     </tbody>
 </table>
           </div>
          
         </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                  test 2
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                  test 3
                  </div>
                  <div class="tab-pane fade " id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
                  test 4
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>


@endsection