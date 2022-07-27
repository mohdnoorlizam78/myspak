@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('asettakalih')}}">Aduan Kerosakan Aset Tak Alih</a></li>
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
 
<table style="width:80%">
<tbody>
<tr>

</tr>
</tbody>

</table>
    

<table style="width:80%" id="t01">
<tbody>

<tr>
                <td style="width: 10%;">No. Aduan</td>
                <td style="width: 50%;"> {{$data_laporrosak->no_aduan}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">Nama Pelapor</td>
                <td style="width: 50%;"> {{$data_laporrosak->users->name}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">No. Telefon</td>
                <td style="width: 50%;"> {{$data_laporrosak->no_tel}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">Bahagian / Unit</td>
                <td style="width: 50%;"> {{$data_laporrosak->bhgn_unit->nama_bahagian}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">Premis</td>
                <td style="width: 50%;"> Institut Latihan Perindustrian Selandar</td>
            </tr>
            <tr>
                <td style="width: 10%;">No. DPA</td>
                <td style="width: 50%;"> 1114111MYS.035214.BE0001</td>
            </tr>
            <tr>
                <td style="width: 10%;">Tarikh/Masa</td>
                <td style="width: 50%;"> {{$data_laporrosak->created_at}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">Skop Perkhidmatan</td>
                <td style="width: 50%;"> {{$data_laporrosak->s_perkhidmatan->nama_skop}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">Lain-lain Skop Perkhidmatan</td>
                <td style="width: 50%;"> {{$data_laporrosak->lain_skop}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">Mod Aduan</td>
                <td style="width: 50%;"> {{$data_laporrosak->m_aduan->nama_mod}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">Lain-lain Mod Aduan</td>
                <td style="width: 50%;"> {{$data_laporrosak->lain_mod}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">Keutamaan</td>
                <td style="width: 50%;"> {{$data_laporrosak->keutamaan->nama_keutamaan}}</td>
            </tr>
    </body>
</table>
<br>
<p style="text-align: left; margin-left: 100px;" >CATATAN ADUAN</p>

<table style="width:80%" id="t01"> 
<tbody>
         <tr>
             <td style="width: 10%;">Lokasi</td>
             <td style="width: 50%;"> {{$data_laporrosak->lokasi->nama_lokasi}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Lain-lain lokasi</td>
             <td style="width: 50%;"> {{$data_laporrosak->lokasi_lain}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Aras</td>
             <td style="width: 50%;"> {{$data_laporrosak->aras->nama_aras}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Nama / No Bilik (Jika ada)</td>
             <td style="width: 50%;"> {{$data_laporrosak->nama_no_bilik}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Keterangan kerosakan</td>
             <td style="width: 50%;"> {{$data_laporrosak->keterangan_rosak}}</td>
         </tr>
<!-- 
         <tr>
             <td style="width: 10%;">Borang aduan(JKR.PATA.F7/2)</td>
             <td style="width: 50%;">: {{$data_laporrosak->muatturun}}</td>
         </tr> -->
         <tr>
             <td style="width: 10%;">Gambar kerosakan</td>
             <td style="width: 50%;"> 
                <!-- <img src="{{asset('storage/aduanrosak/'. $data_laporrosak->gambar_1)}}" class="img-responsive" alt="Image" width="400" height="300" class="img-responsive" alt="Image" width="400" height="300" readonly> -->
            <!-- <a href="{{URL::asset('/public/aduanrosak/'. $data_laporrosak->gambar_1)}}" target = "_blank">Gambar 1</a> -->
            @if($data_laporrosak->gambar_1 != Null)
                <img src="{{URL::asset('/public/aduanrosak/'. $data_laporrosak->gambar_1)}}" width="400" height="300" alt="" class="image" class="img-responsive" readonly>Gambar 1
                @else
                    Tiada gambar 1            
            @endif
            <br>
            <br>
            @if($data_laporrosak->gambar_2 != Null)
                <img src="{{URL::asset('/public/aduanrosak/'. $data_laporrosak->gambar_2)}}"  alt="Image" width="400" height="300" alt="Image" class="img-responsive" readonly>Gambar 2
                @else
                    Tiada gambar 2
             @endif
            </td>
         </tr>
          
         <tr>
             <td style="width: 10%;">Catatan pengadu</td>
             <td style="width: 50%;"> {{$data_laporrosak->catatan_pengadu}}</td>
         </tr>

         <tr>
             <td style="width: 10%;">Nama Penerima</td>
             <td style="width: 50%;"> {{$data_laporrosak->getPegawaiterima->name}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Jawatan</td>
             <td style="width: 50%;"> {{$data_laporrosak->getJawatan->nama_jawatan}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Tarikh/Masa</td>
             <td style="width: 50%;"> {{$data_laporrosak->updated_at}}</td>
         </tr>
         <tr>
             <td style="width: 10%;">Catatan penerima</td>
             <td style="width: 50%;"> {{$data_laporrosak->catatan_penerima}}</td>
         </tr>
     </tbody>

</table>
</br>
<div style="text-align:center;">
@if(auth()->user()->isBppa())
<a href="{{ url('asettakalih/edit/'.$data_laporrosak->id) }}" class="btn btn-warning btn-sm" id="edit"><i class="fas fa-pencil-alt"> </i>&nbsp Tindakan Makluman</a>
    <a class="btn btn-info btn-sm" href="{{url('asettakalih/tindakan/edittindakan', $data_laporrosak->id)}}">
        <i class="fas fa-pencil-alt"> </i> &nbsp Tindakan Siasatan
    </a>
    <!-- <a href="{{ url('asettakalih/pdf', $data_laporrosak->id) }} " target="_blank" style="color:red" class="btn btn-info btn-sm"><i class="far fa-file-pdf"></i>&nbsp Cetak Laporan</a> -->
      
@endif

 
            <!-- <a href="{{ url('asettakalih/pdf', $data_laporrosak->id) }}" target="_blank"  class="btn btn-app bg-danger" >                   
        <i class="fas fa-file-pdf"></i> PDF
    </a>         -->
    <a href="{{ url('asettakalih/pdf', $data_laporrosak->id) }} " target="_blank" style="color:red" class="btn btn-info btn-sm"><i class="far fa-file-pdf"></i>&nbsp Cetak Laporan</a>
    
 </div>

</body>

</html>
    
          
                    </div>
                  </div>
<div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">

Hanya untuk paparan pihak BPPA sahaja.         

                  </div>
                 
                </div>
              </div>
              


@endsection