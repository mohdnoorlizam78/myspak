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
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="false">ADUAN KEROSAKAN (JKR.PATA.F7/2)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">TINDAKAN SIASATAN (JKR.PATA.F7/4)</a>
                  </li>
                  
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                  <div class="card">
 
<!DOCTYPE html>
<html>

<head>
    <title><title>Laporan @if($data_laporrosak)- {{$data_laporrosak->no_aduan}} @endif</title></title>

    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: 100px;
  /* margin-right: 10px; */
}

th, td {
  padding: 5px;
}
th {
  text-align: left;
}
/* #t01 {
  width: 100%;    
  background-color: #f1f1c1;
} */

</style>

</head>

<body>
    <p style="text-align: right; margin-right: 35px; "><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>JKR.PATA.F7/2</span></p>
    <p style="text-align: center;"><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>TATACARA PENGURUSAN ASET TAK ALIH</span></p>
    <p style="text-align: center;"><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>BORANG ADUAN / PERMINTAAN PELANGGAN</span></p>
    <br>

<form role="form" method="post" action="{{ url('asettakalih/update', [$data_laporrosak->id]) }}" enctype="multipart/form-data">
    @csrf
    {{ method_field('PUT') }}
  <table style="width:80%" >
  <tbody>
  <tr>
                  <td style="width: 10%;">No. Aduan</td>
                  <td style="width: 50%;"><input id="no_aduan" name="no_aduan" type="text" class="form-control" value="{{$data_laporrosak->no_aduan}}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Nama Pelapor</td>
                  <td style="width: 50%;"><input id="nama_pelapor_id" name="nama_pelapor_id" value="{{Auth::user()->id}}" class="form-control" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">No. Telefon</td>
                  <td style="width: 50%;"><input id="no_tel" type="text" value="{{ $data_laporrosak->no_tel }}" name="no_tel" class="form-control" readonly ></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Bahagian/Unit</td>
                  <td style="width: 50%;"> <input id="bahagian_unit_id" name="bahagian_unit_id" type="text" class="form-control" value="{{ $data_laporrosak->bhgn_unit->nama_bahagian }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Premis</td>
                  <td style="width: 50%;"><input id="premis" name="premis" value="Institut Latihan Perindustrian Selandar" class="form-control" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">No. DPA</td>
                  <td style="width: 50%;"><input id="no_dpa" name="no_dpa" value=" 1114111MYS.040214.BE0001" class="form-control" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Skop Perkhidmatan</td>
                  <td style="width: 50%;"><input id="skop_perkhidmatan_id" name="skop_perkhidmatan_id" type="text" class="form-control" value="{{ $data_laporrosak->s_perkhidmatan->nama_skop }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Lain-lain skop perkhidmatan</td>
                  <td style="width: 50%;"><input id="lain_skop" name="lain_skop" type="text" class="form-control" value="{{ $data_laporrosak->lain_skop }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Mod Aduan</td>
                  <td style="width: 50%;"><input id="mod_aduan_id" name="mod_aduan_id" type="text" class="form-control" value="{{ $data_laporrosak->m_aduan->nama_mod }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Lain-lain mod aduan</td>
                  <td style="width: 50%;"><input id="lain_mod" name="lain_mod" type="text" class="form-control" value="{{ $data_laporrosak->lain_mod }}" readonly></td>
              </tr>
              <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;CATATAN ADUAN </th>
              <tr>
                  <td style="width: 10%;">Lokasi</td>
                  <td style="width: 50%;"><input id="lokasi_id" name="lokasi_id" type="text" class="form-control" value="{{ $data_laporrosak->lokasi->nama_lokasi }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Lain‐lain (Nyatakan) </td>
                  <td style="width: 50%;"> <input id="lokasi_lain" name="lokasi_lain" type="text" class="form-control" value="{{ $data_laporrosak->lokasi_lain }}" readonly ></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Aras</td>
                  <td style="width: 50%;"> <input id="aras_id" name="aras_id" type="text" class="form-control"value="{{ $data_laporrosak->aras->nama_aras }}" readonly ></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Nama / No Bilik (Jika ada)*</td>
                  <td style="width: 50%;"> <input id="nama_no_bilik" name="nama_no_bilik" type="text" class="form-control" value="{{ $data_laporrosak->nama_no_bilik }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Perkara kerosakan</td>
                  <td style="width: 50%;"><input id="keterangan_rosak" name="keterangan_rosak" type="text" class="form-control" value="{{ $data_laporrosak->keterangan_rosak }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Keutamaan</td>
                  <td style="width: 50%;"><input id="keutamaan_id" name="keutamaan_id" type="text" class="form-control" value="{{ $data_laporrosak->keutamaan->nama_keutamaan }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Gambar kerosakan</td>
                  <td style="width: 50%;">
                  Gambar 1 <img src="{{asset('aduanrosak/'. $data_laporrosak->gambar_1)}}" class="img-responsive" alt="Image" width="400" height="300"> 
             </br></br> Gambar 2 &nbsp<img src="{{asset('aduanrosak/'. $data_laporrosak->gambar_2)}}" class="img-responsive" alt="Image" width="400" height="300">
                  </td>
              </tr>
              <tr>
                  <td style="width: 10%;">Catatan pengadu</td>
                  <td style="width: 50%;"> <input id="catatan_pengadu" name="catatan_pengadu" type="text" class="form-control" value="{{ $data_laporrosak->catatan_pengadu }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Pegawai penerima</td>
                  <td style="width: 50%;">
                    <select id="pegawai_penerima_id" name="pegawai_penerima_id" class="form-control" >
                      <option value="">-- Pilih Nama Pegawai --</option>
                          @foreach ($data_pengguna as $penerima)
                              <option value="{{$penerima->id}}" {{($data_laporrosak->pegawai_penerima_id == $penerima->id) ?'selected' : '' }} >{{$penerima->name}}</option>
                                
                          @endforeach
                      </select>
                  </td>
              </tr>
              <tr>
                  <td style="width: 10%;">Jawatan</td>
                  <td style="width: 50%;">
                    <select id="jawatan_id" name="jawatan_id" class="form-control" >
                      <option value="">-- Pilih Nama Jawatan --</option>
                          @foreach ($data_jawatan as $jawatan)                                            
                              <option value="{{$jawatan->id}}" {{($data_laporrosak->jawatan_id == $jawatan->id) ?'selected' : '' }} >{{$jawatan->nama_jawatan}}</option>
                          @endforeach
                      </select>
                  </td>
              </tr>
              <tr>
                  <td style="width: 10%;">Status</td>
                  <td style="width: 50%;">
                    <select id="status_id" name="status_id" class="form-control" >
                      <option value="">-- Pilih Status --</option>
                          @foreach ($data_status as $status)
                              <option value="{{$status->id}}" {{($data_laporrosak->status_id == $status->id) ?'selected' : '' }} >{{$status->nama_status}}</option>
                          @endforeach
                    </select>
                  </td>
              </tr>
              <tr>
                  <td style="width: 10%;">Catatan penerima</td>
                  <td style="width: 50%;"><input id="catatan_penerima" name="catatan_penerima" type="text" class="form-control" value="{{ $data_laporrosak->catatan_penerima }}" ></td>
              </tr>             
                    
      </body>
  </table>
  </br>

    <div class="card-footer" align="center">
      <button type="submit" class="btn btn-info">Kemas kini</button>
      <button type="reset" class="btn btn-default ">Reset</button>
    </div>
</form>
</body>

</html>
    
          
                    </div>
                  </div>
<div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
<!DOCTYPE html>
<html>

<head>
    <title><title>Laporan @if($data_laporrosak)- {{$data_laporrosak->no_aduan}} @endif</title></title>

    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: 100px;
  /* margin-right: 10px; */
}

th, td {
  padding: 5px;
}
th {
  text-align: left;
}
/* #t01 {
  width: 100%;    
  background-color: #f1f1c1;
} */
/* #t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
} */
</style>

</head>

<body>
    <p style="text-align: right; margin-right: 35px; "><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>JKR.PATA.F7/4</span></p>
    <p style="text-align: center;"><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>BORANG ARAHAN SIASATAN PENYELENGGARAAN</span></p>
    <br>

<form role="form" method="post" action="{{ url('siasatan_penyelenggaraan/add') }}" enctype="multipart/form-data">
  @csrf
 
<table style="width:80%" >

  <tbody class="form-group">  
         
      <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp; A. Maklumat Aduan</th>
    <tr>
      <td style="width: 10%;">No. Aduan</td>
      <td style="width: 50%;">
        <input id="	id_no_aduan" type="text" value="{{ $data_laporrosak->no_aduan }}" name="id_no_aduan" class="form-control" readonly >
      </td>
    </tr>    
       
    <tr>
        <td style="width: 10%;">Nama Pengadu</td>
        <td style="width: 50%;">
        <input id="nama_pelapor_id" name="nama_pelapor_id" value="{{Auth::user()->id}}" class="form-control" readonly>                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Jenis Kerja</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Kategori Kerja</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Lokasi</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Keterangan Kerosakan</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;B. Arahan Siasatan / Tindakan</th>
    <tr>
        <td style="width: 10%;">Diterima Oleh</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Ditugaskan Kepada</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tarikh Ditugaskan</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Masa Ditugaskan</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Ulasan Kerosakan</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;C. Butiran Alat Gantian</th>
    
    <tr>
        <td style="width: 10%;">Jenis Alat Ganti</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Keterangan Alat Ganti</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Harga Alat Ganti</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Kuantiti</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Jumlah</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;D. Tindakan Pembaikan / Pencegahan</th>
    
    <tr>
        <td style="width: 10%;">Perihal Kerja / TIndakan</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tarikh & Masa Mula</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tarikh & Masa Siap</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;E: Lantikan Kontraktor / Tempoh Tanggungan Kecacatan (Jika Berkenan)</th>
   
    <tr>
        <td style="width: 10%;">Nama Kontraktor</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tarikh Mula Kerja</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tarikh Siap Kerja</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Kos Akhir</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tempoh Tanggungan</td>
        <td style="width: 50%;">
          <input id="id_nama_pengadu" type="text" value="{{ $data_laporrosak->users->name }}" name="id_nama_pengadu" class="form-control"  >                        
        </td>
    </tr>

            
    </body>
</table>
  <button type="submit" class="btn btn-primary">Hantar</button>
   <button type="reset" class="btn btn-warning">Reset</button> 
</form>
</body>

</html>

                  </div>
                 
                </div>
              </div>
              <!-- /.card -->
            </div>


@endsection