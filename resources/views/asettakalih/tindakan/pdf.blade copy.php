<!DOCTYPE html>
<html>

<head>
    <title><title>Laporan @if($data_tindakan_rosak)- {{$data_tindakan_rosak->no_aduan}} @endif</title></title>

    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: 35px;
  margin-right: 35px;
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
    <br>
 
<table style="width:100%">

 
            <tr>
                <td style="width:35%;">No. Aduan</td>
                <td>: {{$data_tindakan_rosak->no_aduan}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Nama Pengadu</td>
                <td>: {{$data_tindakan_rosak->users->name}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Jenis Kerja</td>
                <td>: {{$data_tindakan_rosak->jeniskerja->nama_kerja}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Keutamaan</td>
                <td>: {{$data_tindakan_rosak->keutamaan->nama_keutamaan}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Lokasi</td>
                <td>: {{$data_tindakan_rosak->lokasi->nama_lokasi}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Keterangan Kerosakan</td>
                <td>: {{$data_tindakan_rosak->keterangan_rosak}}</td>
            </tr>
            
            <tr>
                <td style="width:35%;">Diterima Oleh</td>
                <td>: {{$data_tindakan_rosak->getPegawaiterima->name}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Ditugaskan Kepada</td>
                <td>: {{$data_tindakan_rosak->pegawaipenerima->name}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Tarikh</td>
                <td>: {{$data_tindakan_rosak->tarikh_ditugaskan}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Masa</td>
                <td>: {{$data_tindakan_rosak->masa_ditugaskan}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Ulasan Kerosakan</td>
                <td>: {{$data_tindakan_rosak->ulasan_rosak}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Jenis Alat Ganti</td>
                <td>: {{$data_tindakan_rosak->jenis_alat_ganti}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Keterangan Alat Ganti</td>
                <td>: {{$data_tindakan_rosak->keterangan_alat_ganti}}</td>
            </tr>
</table>
<br>
<p style="text-align: left; margin-left: 35px;" >CATATAN ADUAN</p>

<table style="width:100%" id="t01"> 
    <tr>
        <td style="width:35%;">Harga Alat Ganti</td>
        <td>: {{$data_tindakan_rosak->harga_seunit_alat}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Kuantiti</td>
        <td>: {{$data_tindakan_rosak->kuantiti_alat}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Jumlah</td>
        <td>: {{$data_tindakan_rosak->jumlah_alat}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Perihal Kerja / Tindakan</td>
        <td>: {{$data_tindakan_rosak->perihal_kerja}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Tarikh & Masa Mula </td>
        <td>: {{$data_tindakan_rosak->tarikh_mula}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Tarikh & Masa Siap</td>
        <td>: {{$data_tindakan_rosak->tarikh_siap}}</td>
    </tr>
    <tr>
    <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;E: Lantikan Kontraktor / Tempoh Tanggungan Kecacatan (Jika Berkenan)</th>
    </tr>
    <tr>
        <td style="width:35%;">Nama Kontraktor</td>
        <td>: {{$data_tindakan_rosak->nama_kontraktor}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Tarikh Mula Kerja</td>
        <td>: {{$data_tindakan_rosak->tarikh_mula_kon}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Tarikh Siap Kerja</td>
        <td>: {{$data_tindakan_rosak->tarikh_siap_kon}}</td>
    </tr>

</table>
<table style="width:100%" id="t01"> 
    <tr>
        <td style="width:35%;">Kos Akhir</td>
        <td>: {{$data_tindakan_rosak->kos_akhir}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Tempoh Tanggungan</td>
        <td>: {{$data_tindakan_rosak->tempoh_tanggungan}}</td>
    </tr>
       
    
    

</table>


</body>

</html>