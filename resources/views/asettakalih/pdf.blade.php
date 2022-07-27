<!DOCTYPE html>
<html>
<head> <title>Laporan @if($data_rosak)- {{$data_rosak->no_aduan}} @endif</title>
<style>
u { 
  text-decoration: underline;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: 20px;
  /* margin-right: 20px; */
  
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
   
      input[type=checkbox] {
        vertical-align: middle;
        position: relative;
        bottom: 2px;
        text-indent: 50px;
      }
     
      label {
    /* display: block; */
    margin-left: 50px;
}

</style>
</head>
<body>
<p style="text-align: right; margin-right: 35px; "><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>JKR.PATA.F7/2</span></p>
    <p style="text-align: center;"><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 350; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>BORANG ADUAN / PERMINTAAN PELANGGAN</span></p>
    
<table style="width:100%">
  
  <tr>
    <th style="width:10%;">No. Aduan</th>
    <td colspan="4">{{$data_rosak->no_aduan}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Nama Pelanggan</th>
    <td colspan="4">{{$data_rosak->users->name}}</td>
  </tr>
  <tr>
    <th style="width:10%;">No. telefon</th>
    <td colspan="4">{{$data_rosak->no_tel}}</td>
  </tr>
  <tr>
    <th style="width:10%;">Jabatan</th>
    <td colspan="4">Jabatan Tenaga Manusia</td>
  </tr>
  <tr>
    <th style="width:10%;">Premis</th>
    <td colspan="4">{{$data_rosak->premis}}</td>
  </tr>
  <tr>
    <th style="width:10%;">No. DPA</th>
    <td colspan="4">{{$data_rosak->no_dpa}}</td>
  </tr>
 
  <tr>
    <th style="width:10%;">Tarikh / Masa</th>
    <td colspan="4">{{date('d/m/Y h:i A',strtotime($data_rosak->created_at))}}</td>
  </tr>
</table>  
  
  <table style="width:100%">
  
  <tr>
    <th style="width:50%;">Skop Perkhidmatan: 
    <br>
    <br>

    @include('asettakalih.skop') 
   
    </th>

    <th>Mod Aduan:
    <br>
    <br> 
    @include('asettakalih.mod')
    
    </th>
  </tr>
  <tr>
    <!-- <th style="width:10%;">No. DPA</th> -->
    <th colspan="2">Keutamaan:
    <br>
    <br> 
      @include('asettakalih.keutamaan')
    </th>
  </tr>
</table>
<br>
<p>CATATAN ADUAN</p>
<table style="width:100%">
<tr>
    <!-- <th style="width:10%;">No. DPA</th> -->
    <td colspan="2" style= "text-indent: 30px;">
    <br>
    {{$data_rosak->keterangan_rosak}}
    <br>
    <br>
    
    </td>
  </tr>

  <tr>
    <th style="width:20%;">Nama Penerima</th>
    <td colspan="1">{{$data_rosak->getPegawaiterima->name}}</td>
  </tr>
  <tr>
    <th style="width:20%;">Jawatan</th>
    <td colspan="1">{{$data_rosak->getJawatan->nama_jawatan}}</td>
  </tr>
  <tr>
    <th style="width:20%;">Tarikh / Masa</th>
    <td colspan="1">{{date('d/m/Y h:i A',strtotime($data_rosak->updated_at))}}</td>
  </tr>
  <tr>
    <th style="width:20%;">Gambar kerosakan </th>    
    <td colspan="1"> 
    <div style="margin: 60px; ">
      @if($data_rosak->gambar_1 != Null)
      <img src="{{URL::asset('/public/aduanrosak/'. $data_rosak->gambar_1)}}" class="img-responsive" alt="Image" width="400" height="300" class="img-responsive" alt="Image" width="400" height="300" readonly>Gambar 1
        @else
          Tiada gambar 1
      @endif
      <br>
      <br>
      @if($data_rosak->gambar_2 != Null)
          <img src="{{URL::asset('/public/aduanrosak/'. $data_rosak->gambar_2)}}" class="img-responsive" alt="Image" width="400" height="300" class="img-responsive" alt="Image" width="400" height="300" readonly>Gambar 2
        @else
          Tiada gambar 2
      @endif 
      </div>   
    </td>
  </tr>
</table>
 

</body>
</html>