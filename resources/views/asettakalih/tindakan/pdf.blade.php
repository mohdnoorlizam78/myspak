<!DOCTYPE html>
<html>
<head> <title>Laporan @if($data_tindakan_rosak)- {{$data_tindakan_rosak->no_aduan}} @endif</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  /* margin-left: 20px;
  margin-right: 20px; */
}

/* th, td {
  padding: 5px;
} */
th {
  text-align: left;
}
/* #t01 {
  width: 100%;    
  background-color: #f1f1c1;
} */
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
</style>
</head>
<body>
<p style="text-align: right; margin-right: 35px; "><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>JKR.PATA.F7/4</span></p>
    <p style="text-align: center;"><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>BORANG ARAHAN SIASATAN PENYELENGGARAAN</span></p>
    
<table style="width:100%">
  
  <tr>
    <th rowspan="2"></th>
    <th style="width:10%;">No. Aduan</th>
    <th colspan="3">{{$data_tindakan_rosak->no_aduan}}</th>
  </tr>
  
  <tr>
    <th style="width:10%;">Status</th>
    <td colspan="3">{{$data_tindakan_rosak->status_aduan->nama_status}}</td>
  </tr>

  <tr>
  <th colspan="5" scope="row" style=" background-color: #eee; text-align: center;">&nbsp; A. Maklumat Aduan</th>
  </tr>
  <tr>
    <th style="width:10%;">No. Aduan</th>
    <td colspan="4">{{$data_tindakan_rosak->no_aduan}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Nama Pengadu</th>
    <td colspan="4">{{$data_tindakan_rosak->users->name}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Jenis Kerja</th>
    <td colspan="4">{{$data_tindakan_rosak->jeniskerja->nama_kerja}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Kategori Kerja</th>
    <td colspan="4">{{$data_tindakan_rosak->keutamaan->nama_keutamaan}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Lokasi</th>
    <td colspan="4">{{$data_tindakan_rosak->lokasi->nama_lokasi}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Keterangan Kerosakan</th>
    <td colspan="4">{{$data_tindakan_rosak->keterangan_rosak}}</td>
  </tr>
  <tr>
  <th colspan="5" scope="row" style=" background-color: #eee; text-align: center;">&nbsp; B. Arahan Siasatan / Tindakan</th>
  </tr>
  <tr>
    <th style="width:10%;">Diterima Oleh</th>
    <td style="width:30%;">{{$data_tindakan_rosak->getPegawaiterima->name}}</td>
    <th>Ditugaskan Kepada</th>
    <td colspan="2">{{$data_tindakan_rosak->pegawaipenerima->name}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Tarikh</th>
    <td style="text-align:center">{{date('d/m/Y',strtotime($data_tindakan_rosak->tarikh_ditugaskan))}}</td>
    
    <th>Masa</th>
    <td colspan="2" style="text-align:center">{{date('h:i A',strtotime($data_tindakan_rosak->masa_ditugaskan))}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Ulasan Kerosakan</th>
    <td colspan="4">{{$data_tindakan_rosak->ulasan_rosak}}</td>
  </tr>
  <tr>
    <th style="width:10%;"><br><br>Tandatangan:<br>
    Cop Nama & Jawatan<br><br> 
    </th>
    <td colspan="4"></td>
  </tr>
  <tr>
  <th colspan="5" scope="row" style=" background-color: #eee; text-align: center;">&nbsp; C. Butiran Alat Gantian</th>
  </tr>
  <tr>
    <th>Jenis Alat Ganti</th>
    <th>Keterangan</th>
    <th>Harga Alat Ganti/Stok</th>
    <th>Kuantiti</th>
    <th>Jumlah</th>
  </tr>
  <tr>
    <td>{{$data_tindakan_rosak->jenis_alat_ganti}}</td>
    <td>{{$data_tindakan_rosak->keterangan_alat_ganti}}</td>
    <td style="text-align:center">{{$data_tindakan_rosak->harga_seunit_alat}}</td>
    <td style="text-align:center">{{$data_tindakan_rosak->kuantiti_alat}}</td>
    <td style="text-align:center">{{$data_tindakan_rosak->jumlah_alat}}</td>
  </tr>
  <tr>
  <th colspan="5" scope="row" style=" background-color: #eee; text-align: center;">&nbsp; D. Tindakan Pembaikan / Pencegahan</th>
  </tr>
  <tr>
    <th style="width:10%;">Perihal Kerja / Tindakan</th>
    <td colspan="4" style="text-align:center">{{$data_tindakan_rosak->perihal_kerja}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Tarikh & Masa Mula</th>
    <td style="text-align:center">{{date('d/m/Y h:i A',strtotime($data_tindakan_rosak->tarikh_mula))}}</td>
    <th>Tarikh & Masa Siap</th>
    <td colspan="2" style="text-align:center">{{date('d/m/Y h:i A',strtotime($data_tindakan_rosak->tarikh_siap))}}</td>
  </tr>
  <tr>
    <th style="width:10%;"><br><br>Tandatangan:<br>
    Cop Nama & Jawatan<br><br>  
    </th>
    <td colspan="4"></td>
  </tr>
  <tr>
  <th colspan="5" scope="row" style=" background-color: #eee; text-align: center;">&nbsp; E: Lantikan Kontraktor / Tempoh Tanggungan Kecacatan (Jika Berkenan)</th>
  </tr>
  <tr>
    <th style="width:10%;">Nama Kontraktor</th>
    <td colspan="4">{{$data_tindakan_rosak->nama_kontraktor}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Tarikh Mula Kerja</th>
    <td style="text-align:center">{{date('d/m/Y',strtotime($data_tindakan_rosak->tarikh_mula_kon))}}</td>
    <th>Kos Akhir (RM)</th>
    <td colspan="2" style="text-align:center">{{$data_tindakan_rosak->kos_akhir}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Tarikh Siap Kerja</th>
    <td style="text-align:center">{{date('d/m/Y',strtotime($data_tindakan_rosak->tarikh_siap_kon))}}</td>
    <th>Tempoh Tanggungan</th>
    <td colspan="2" style="text-align:center">{{$data_tindakan_rosak->tempoh_tanggungan}}</td>
  </tr>
  <tr>
  <th colspan="5" scope="row" style=" background-color: #eee; text-align: center;">&nbsp; F. Perakuan Kerja Siap</th>
  </tr>
  
  </table>

  <table style="width:100%">
  
  <tr>
    <th style="width:50%;">Pengesahan oleh<br>Pegawai Penyelia Kontraktor (Jika Berkenaan)
    <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     Tandatangan<br>
    Cop Nama & Jawatan<br><br>
    </th>

    <th >Pengesahan oleh<br>Unit Fasiliti & Penyelenggaraan
    <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     Tandatangan<br>
    Cop Nama & Jawatan<br><br>
    </th>
  </tr>

</table>

</body>
</html>