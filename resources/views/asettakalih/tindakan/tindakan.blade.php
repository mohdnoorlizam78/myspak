@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('asettakalih')}}">Tindakan Siasatan Aduan Kerosakan
aset tak alih</a></li>
    <li class="breadcrumb-item active">Terperinci</li>
</ol>

 
<div class="container-fluid">

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

<form role="form" method="post" action="{{ url('asettakalih/updatetindakan', [$data_laporrosak->id]) }}" enctype="multipart/form-data">
  @csrf
  {{ method_field('PUT') }}
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
        <input id="nama_pelapor_id" name="nama_pelapor_id" value="{{$data_laporrosak->users->name}}" class="form-control" readonly>                        
        </td>
    </tr>
    
    <tr>
        <td style="width: 10%;">Jenis Kerja</td>
        <td style="width: 50%;">
        <select id="jenis_kerja_id" name="jenis_kerja_id" class="form-control" required>
            <option value="">-- Pilih Jenis Kerja --</option>
                @foreach ($data_jeniskerja as $jeniskerja)
                    <option value="{{$jeniskerja->id}}" {{($data_laporrosak->jenis_kerja_id == $jeniskerja->id) ?'selected' : '' }} >{{$jeniskerja->nama_kerja}}</option>
                @endforeach
        </select>                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Keutamaan</td>
        <td style="width: 50%;">
        <input id="keutamaan_id" name="keutamaan_id" type="text" class="form-control" value="{{ $data_laporrosak->keutamaan->nama_keutamaan }}" readonly>
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Lokasi</td>
        <td style="width: 50%;">
            <input id="lokasi_id" name="lokasi_id" type="text" class="form-control" value="{{ $data_laporrosak->lokasi->nama_lokasi }}" readonly>                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Keterangan Kerosakan</td>
        <td style="width: 50%;">
            <input id="keterangan_rosak" name="keterangan_rosak" type="text" class="form-control" value="{{ $data_laporrosak->keterangan_rosak }}" readonly>                        
        </td>
    </tr>
    <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;B. Arahan Siasatan / Tindakan</th>
    <tr>
        <td style="width: 10%;">Diterima Oleh</td>
        <td style="width: 50%;">
            <input id="pegawai_penerima_id" name="pegawai_penerima_id" value="{{$data_laporrosak->getPegawaiterima->name}}" class="form-control" readonly>                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Ditugaskan Kepada</td>
        <td style="width: 50%;">
        <select id="ditugaskan_id" name="ditugaskan_id" class="form-control" required>
            <option value="">-- Pilih Nama Pegawai --</option>
                @foreach ($data_pengguna as $penerima)
                    <option value="{{$penerima->id}}" {{($data_laporrosak->ditugaskan_id == $penerima->id) ?'selected' : '' }} >{{$penerima->name}}</option>
                    
                @endforeach
        </select>                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tarikh</td>
        <td style="width: 50%;">
        <input type="date" name="tarikh_ditugaskan" value="{{ $data_laporrosak->tarikh_ditugaskan }}">
               
            <!-- <div class="input-group date" id="datetimepicker4" data-target-input="nearest" required>
                <input type="text" name="tarikh_ditugaskan" value="{{ $data_laporrosak->tarikh_ditugaskan }}" class="form-control datetimepicker-input" data-target="#datetimepicker4">
                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                </div>
            </div>   -->
            
                             
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Masa Ditugaskan</td>
        <td style="width: 50%;">
        <input type="time" name="masa_ditugaskan" value="{{ $data_laporrosak->masa_ditugaskan }}">
        <!-- <div class="input-group date" id="datetimepicker3" data-target-input="nearest" required>
            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
            <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fas fa-clock"></i></div>
            </div>
        </div> -->
                
        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Ulasan Kerosakan</td>
        <td style="width: 50%;">
            <input id="ulasan_rosak" type="text" value="{{ $data_laporrosak->ulasan_rosak }}" name="ulasan_rosak" class="form-control" required >                        
        </td>
    </tr>
    <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;C. Butiran Alat Gantian</th>
    
    <tr>
        <td style="width: 10%;">Jenis Alat Ganti</td>
        <td style="width: 50%;">
          <input id="jenis_alat_ganti" type="text" value="{{ $data_laporrosak->jenis_alat_ganti }}" name="jenis_alat_ganti" class="form-control" required >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Keterangan Alat Ganti</td>
        <td style="width: 50%;">
          <input id="keterangan_alat_ganti" type="text" value="{{ $data_laporrosak->keterangan_alat_ganti }}" name="keterangan_alat_ganti" class="form-control" required >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Harga Alat Ganti</td>
        <td style="width: 50%;">
          <input id="harga_seunit_alat" type="number" value="{{ $data_laporrosak->harga_seunit_alat }}" name="harga_seunit_alat" class="form-control" required>                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Kuantiti</td>
        <td style="width: 50%;">
          <input id="kuantiti_alat" type="number" value="{{ $data_laporrosak->kuantiti_alat }}" name="kuantiti_alat" class="form-control" required >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Jumlah</td>
        <td style="width: 50%;">
          <input id="jumlah_alat" type="number" value="{{ $data_laporrosak->jumlah_alat }}" name="jumlah_alat" class="form-control" required >                        
        </td>
    </tr>
    <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;D. Tindakan Pembaikan / Pencegahan</th>
    
    <tr>
        <td style="width: 10%;">Perihal Kerja / Tindakan</td>
        <td style="width: 50%;">
          <input id="perihal_kerja" type="text" value="{{ $data_laporrosak->perihal_kerja }}" name="perihal_kerja" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tarikh & Masa Mula</td>
        <td style="width: 50%;">
        
        <input type="datetime-local" name="tarikh_mula" value="{{ $data_laporrosak->tarikh_mula }}">
        <!-- <div class="input-group date" id="reservationdatetime3" data-target-input="nearest">
                <input type="datetime-local" name="tarikh_mula" value="{{$data_laporrosak->tarikh_mula}}" class="form-control datetimepicker-input" data-target="#reservationdatetime">
                <div class="input-group-append" data-target="#reservationdatetime3" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>   -->
           </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tarikh & Masa Siap</td>
        <td style="width: 50%;">
        <input type="datetime-local" name="tarikh_siap" value="{{$data_laporrosak->tarikh_siap}}">
        <!-- <div class="input-group date" id="reservationdatetime4" data-target-input="nearest">
                <input type="text" name="tarikh_siap" class="form-control datetimepicker-input" data-target="#reservationdatetime">
                <div class="input-group-append" data-target="#reservationdatetime4" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>                 -->
        </td>
    </tr>
    <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;E: Lantikan Kontraktor / Tempoh Tanggungan Kecacatan (Jika Berkenan)</th>
   
    <tr>
        <td style="width: 10%;">Nama Kontraktor</td>
        <td style="width: 50%;">
          <input id="nama_kontraktor" type="text" value="{{ $data_laporrosak->nama_kontraktor }}" name="nama_kontraktor" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tarikh Mula Kerja</td>
        <td style="width: 50%;">
        <input type="date" name="tarikh_mula_kon" value="{{ $data_laporrosak->tarikh_mula_kon }}">
        <!-- <div class="input-group date" id="datetimepicker5" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="tarikh_mula_kon" autocomplete="off" value="{{ date('Y-m-d') }}" />
                <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>                         -->
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tarikh Siap Kerja</td>
        <td style="width: 50%;">
        <input type="date" name="tarikh_siap_kon" value="{{ $data_laporrosak->tarikh_siap_kon }}">
        <!-- <div class="input-group date" id="datetimepicker6" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tarikh_siap_kon" autocomplete="off" value="{{ date('Y-m-d') }}" />
                <div class="input-group-append" data-target="#datetimepicker6" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>                         -->
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Kos Akhir</td>
        <td style="width: 50%;">
          <input id="kos_akhir" type="number" value="{{ $data_laporrosak->kos_akhir }}" name="kos_akhir" class="form-control"  >                        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;">Tempoh Tanggungan</td>
        <td style="width: 50%;">
          <input id="tempoh_tanggungan" type="text" value="{{ $data_laporrosak->tempoh_tanggungan }}" name="tempoh_tanggungan" class="form-control"  >                        
        </td>
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

           
@endsection