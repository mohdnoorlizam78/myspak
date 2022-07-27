<!DOCTYPE html>
<html>

<head>
    <title>Laporan @if($data_rosak)- {{$data_rosak->no_aduan}} @endif</title>

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
    <p style="text-align: right; margin-right: 35px; "><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>JKR.PATA.F7/2</span></p>
    <p style="text-align: center;"><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>TATACARA PENGURUSAN ASET TAK ALIH</span></p>
    <p style="text-align: center;"><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>BORANG ADUAN / PERMINTAAN PELANGGAN</span></p>
    <br>
 
<table style="width:100%" id="t01">

<tr>
                <td style="width:35%;">No. Aduan</td>
                <td>: {{$data_rosak->no_aduan}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Nama Pelapor</td>
                <td>: {{$data_rosak->users->name}}</td>
            </tr>
            <tr>
                <td style="width:35%;">No. Telefon</td>
                <td>: {{$data_rosak->no_tel}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Bahagian / Unit</td>
                <td>: {{$data_rosak->bhgn_unit->nama_bahagian}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Premis</td>
                <td>: Institut Latihan Perindustrian Selandar</td>
            </tr>
            <tr>
                <td style="width:35%;">No. DPA</td>
                <td>: 1114111MYS.035214.BE0001</td>
            </tr>
            <tr>
                <td style="width:35%;">Tarikh/Masa</td>
                <td>: {{$data_rosak->created_at}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Skop Perkhidmatan</td>
                <td>: {{$data_rosak->s_perkhidmatan->nama_skop}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Lain-lain Skop Perkhidmatan</td>
                <td>: {{$data_rosak->lain_skop}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Mod Aduan</td>
                <td>: {{$data_rosak->m_aduan->nama_mod}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Lain-lain Mod Aduan</td>
                <td>: {{$data_rosak->lain_mod}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Keutamaan</td>
                <td>: {{$data_rosak->keutamaan->nama_keutamaan}}</td>
            </tr>
            <tr>
                <td style="width:35%;">Catatan Pengadu</td>
                <td>: {{$data_rosak->catatan_pengadu}}</td>
            </tr>
</table>
<br>
<p style="text-align: left; margin-left: 35px;" >CATATAN ADUAN</p>

<table style="width:100%" id="t01"> 
    <tr>
        <td style="width:35%;">Lokasi</td>
        <td>: {{$data_rosak->lokasi->nama_lokasi}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Lain-lain lokasi</td>
        <td>: {{$data_rosak->lokasi_lain}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Aras</td>
        <td>: {{$data_rosak->aras->nama_aras}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Nama / No Bilik (Jika ada)</td>
        <td>: {{$data_rosak->nama_no_bilik}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Keterangan kerosakan </td>
        <td>: {{$data_rosak->keterangan_rosak}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Nama Penerima</td>
        <td>: {{$data_rosak->getPegawaiterima->name}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Jawatan</td>
        <td>: {{$data_rosak->getJawatan->nama_jawatan}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Tarikh/Masa</td>
        <td>: {{$data_rosak->updated_at}}</td>
    </tr>
    <tr>
        <td style="width:35%;">Catatan Penerima</td>
        <td>: {{$data_rosak->catatan_penerima}}</td>
    </tr>

</table>
<table style="width:100%" id="t01"> 
    <tr>
        <td style="width:35%;">Gambar kerosakan</td>
        <td style="text-align: center;" ><img src="{{asset('aduanrosak/'. $data_rosak->gambar_1)}}" class="img-responsive" alt="Image" width="400" height="300"> 
        <br><br>
        <img src="{{asset('aduanrosak/'. $data_rosak->gambar_2)}}" class="img-responsive" alt="Image" width="400" height="300">
        </td>
        </tr>
       
    
    

</table>


</body>

</html>