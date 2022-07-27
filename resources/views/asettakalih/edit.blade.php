@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('asettakalih')}}">Aduan Kerosakan Aset Tak Alih
aset tak alih</a></li>
    <li class="breadcrumb-item active">Terperinci</li>
</ol>

 
<div class="container-fluid">

 
<!DOCTYPE html>
<html>

<head>
    <title><title>Laporan @if($dt)- {{$dt->no_aduan}} @endif</title></title>

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

<form role="form" method="post" action="{{ url('asettakalih/update', [$dt->id]) }}" enctype="multipart/form-data">
    @csrf
    {{ method_field('PUT') }}
  <table style="width:80%" >
  <tbody>
            <tr>
                  <td style="width: 10%;">No. Aduan</td>
                  <td style="width: 50%;"><input id="no_aduan" name="no_aduan" type="text" class="form-control" value="{{$dt->no_aduan}}" ></td>
              </tr>
              <tr>
                  <!-- <td style="width: 10%;">Nama Pelapor</td> -->
                  <!-- <td style="width: 50%;"><input id="nama_pelapor_id" name="nama_pelapor_id" value="{{$dt->users->name}}" class="form-control" ></td> -->
                  <tr>
                  <td style="width: 10%;">Nama Pelapor</td>
                  <td style="width: 50%;">
                  <input id="nama_pelapor_id" type="text" value="{{ $dt->users->name }}" name="nama_pelapor_id" class="form-control"  readonly>

                 
                    <!-- <select id="nama_pelapor_id" name="nama_pelapor_id" class="form-control" readonly>
                      <option value="">-- Pilih Nama Pegawai --</option>                       
                          @foreach ($data_pengguna as $pelapor)                          
                              <option value="{{$pelapor->id}}" {{($dt->nama_pelapor_id == $pelapor->id) ?'selected' : '' }} >{{$pelapor->name}}</option>
                          @endforeach
                      </select> -->
                  </td>
              </tr>

              </tr>
              <tr>
                  <td style="width: 10%;">No. Telefon</td>
                  <td style="width: 50%;">
                    <input id="no_tel" type="text" value="{{ $dt->no_tel }}" name="no_tel" class="form-control"  readonly>
                  </td>
              </tr>
              <tr>
                  <td style="width: 10%;">Bahagian/Unit</td>
                  <td style="width: 50%;">
                  <input id="bahagian_unit_id" type="text" value="{{ $dt->bhgn_unit->nama_bahagian }}" name="bahagian_unit_id" class="form-control"  readonly>
                    <!-- <select id="bahagian_unit_id" name="bahagian_unit_id" class="form-control" readonly >
                      <option value="" >-- Pilih Bahagian/Unit  --</option>
                          @foreach ($data_bahagian_unit as $bahagianunit)
                              <option value="{{$bahagianunit->id}}" {{($dt->bahagian_unit_id == $bahagianunit->id) ?'selected' : '' }} >{{$bahagianunit->nama_bahagian}}</option>
                                
                          @endforeach
                      </select> -->
                  </td>
                  
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
                  <td style="width: 50%;">
                  <input id="skop_perkhidmatan_id" type="text" value="{{ $dt->s_perkhidmatan->nama_skop }}" name="skop_perkhidmatan_id" class="form-control"  readonly>

                  <!-- <select id="skop_perkhidmatan_id" name="skop_perkhidmatan_id" class="form-control" readonly >
                      <option value="" >-- Pilih Skop Perkhidmatan  --</option>
                          @foreach ($data_skop_perkhidmatan as $skop)
                              <option value="{{$skop->id}}" {{($dt->skop_perkhidmatan_id == $skop->id) ?'selected' : '' }} >{{$skop->nama_skop}}</option>
                                
                          @endforeach
                      </select> -->
                     
                 </td>
              </tr>
              <tr>
                  <td style="width: 10%;">Lain-lain skop perkhidmatan</td>
                  <td style="width: 50%;"><input id="lain_skop" name="lain_skop" type="text" class="form-control" value="{{ $dt->lain_skop }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Mod Aduan</td>
                   <td style="width: 50%;">
                   <input id="mod_aduan_id" type="text" value="{{ $dt->m_aduan->nama_mod }}" name="mod_aduan_id" class="form-control"  readonly> 
              
                    <!-- <select id="mod_aduan_id" name="mod_aduan_id" class="form-control" readonly>
                      <option value="">-- Pilih Mod Aduan --</option>
                          @foreach ($data_mod_aduan as $mod)
                              <option value="{{$mod->id}}" {{($dt->mod_aduan_id == $mod->id) ?'selected' : '' }} >{{$mod->nama_mod}}</option>
                                
                          @endforeach
                      </select> -->
                  </td>
              </tr>
              <tr>
                  <td style="width: 10%;">Lain-lain mod aduan</td>
                  <td style="width: 50%;"><input id="lain_mod" name="lain_mod" type="text" class="form-control" value="{{ $dt->lain_mod }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Keutamaan</td>
                   <td style="width: 50%;">
                   <input id="keutamaan_id" type="text" value="{{ $dt->keutamaan->nama_keutamaan }}" name="keutamaan_id" class="form-control"  readonly> 
              
                    <!-- <select id="keutamaan_id" name="keutamaan_id" class="form-control" readonly>
                      <option value="">-- Pilih Keutamaan --</option>
                          @foreach ($data_keutamaan as $keutamaan)
                              <option value="{{$keutamaan->id}}" {{($dt->keutamaan_id == $keutamaan->id) ?'selected' : '' }} >{{$keutamaan->nama_keutamaan}}</option>
                                
                          @endforeach
                      </select> -->
                   
              </tr>
              
              <th colspan="3" scope="row" style=" background-color: #eee; text-align: center;">&nbsp;CATATAN ADUAN </th>
              <tr>
                  <td style="width: 10%;">Lokasi</td>
                   
                  <td style="width: 50%;">
                  <input id="lokasi_id" type="text" value="{{ $dt->lokasi->nama_lokasi }}" name="lokasi_id" class="form-control"  readonly> 
                                
                    <!-- <select id="lokasi_id" name="lokasi_id" class="form-control" readonly>
                      <option value="">-- Pilih Lokasi --</option>
                          @foreach ($data_lokasi as $lokasi)
                              <option value="{{$lokasi->id}}" {{($dt->lokasi_id == $lokasi->id) ?'selected' : '' }} >{{$lokasi->nama_lokasi}}</option>
                                
                          @endforeach
                      </select> -->
                   
              </tr>
              <tr>
                  <td style="width: 10%;">Lain‐lain (Nyatakan) </td>
                  <td style="width: 50%;"> <input id="lokasi_lain" name="lokasi_lain" type="text" class="form-control" value="{{ $dt->lokasi_lain }}" readonly></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Aras</td>
                  <td style="width: 50%;">
                  <input id="aras_id" type="text" value="{{ $dt->lokasi->nama_aras}}" name="aras_id" class="form-control"  readonly> 
                 
                    <!-- <select id="aras_id" name="aras_id" class="form-control" >
                      <option value="">-- Pilih Aras --</option>
                          @foreach ($data_aras as $aras)
                              <option value="{{$aras->id}}" {{($dt->aras_id == $aras->id) ?'selected' : '' }} >{{$aras->nama_aras}}</option>
                                
                          @endforeach
                      </select> -->
                   
              </tr>
              <tr>
                  <td style="width: 10%;">Nama / No Bilik (Jika ada)*</td>
                  <td style="width: 50%;"> <input id="nama_no_bilik" name="nama_no_bilik" type="text" class="form-control" value="{{ $dt->nama_no_bilik }}" readonly ></td>
              </tr>
              <tr>
                  <td style="width: 10%;">Perkara kerosakan</td>
                  <td style="width: 50%;"><input id="keterangan_rosak" name="keterangan_rosak" type="text" class="form-control" value="{{ $dt->keterangan_rosak }}" readonly></td>
              </tr>
              
              <tr>
                  <td style="width: 10%;">Gambar kerosakan</td>
                  <td style="width: 50%;">
                  @if($dt->gambar_1 != Null)
                    <img src="{{URL::asset('/public/aduanrosak/'. $dt->gambar_1)}}" width="400" height="300" alt="" class="image" class="img-responsive" >Gambar 1
                    @else
                        Tiada gambar 1
                    
                 @endif
                </br></br> @if($dt->gambar_2 != Null)
                    <img src="{{URL::asset('/public/aduanrosak/'. $dt->gambar_2)}}"  alt="Image" width="400" height="300" alt="Image" class="img-responsive" readonly>Gambar 2
                    @else
                        Tiada gambar 2
                @endif
            </td>
              </tr>
              <tr>
                  <td style="width: 10%;">Catatan pengadu</td>
                  <td style="width: 50%;"> <input id="catatan_pengadu" name="catatan_pengadu" type="text" class="form-control" value="{{ $dt->catatan_pengadu }}" readonly></td>
              </tr>
              @if(auth()->user()->isBppa())
              <tr>
                  <td style="width: 10%;">Pegawai penerima</td>
                  <td style="width: 50%;">
                    <select id="pegawai_penerima_id" name="pegawai_penerima_id" class="form-control" >
                      <option value="">-- Pilih Nama Pegawai --</option>
                          @foreach ($data_pengguna as $penerima)
                              <option value="{{$penerima->id}}" {{($dt->pegawai_penerima_id == $penerima->id) ?'selected' : '' }} >{{$penerima->name}}</option>
                                
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
                              <option value="{{$jawatan->id}}" {{($dt->jawatan_id == $jawatan->id) ?'selected' : '' }} >{{$jawatan->nama_jawatan}}</option>
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
                              <option value="{{$status->id}}" {{($dt->status_id == $status->id) ?'selected' : '' }} >{{$status->nama_status}}</option>
                          @endforeach
                    </select>
                  </td>
              </tr>
              <tr>
                  <td style="width: 10%;">Tindakan</td>
                  <td style="width: 50%;">
                    <select id="tindakan_id" name="tindakan_id" class="form-control" >
                      <option value="">-- Pilih tindakan --</option>
                          @foreach ($data_tindakan as $tindakan)
                              <option value="{{$tindakan->id}}" {{($dt->tindakan_id == $tindakan->id) ?'selected' : '' }} >{{$tindakan->nama_tindakan}}</option>
                          @endforeach
                    </select>
                  </td>
              </tr>
              <tr>
                  <td style="width: 10%;">Catatan penerima</td>
                  <td style="width: 50%;"><input id="catatan_penerima" name="catatan_penerima" type="text" class="form-control" value="{{ $dt->catatan_penerima }}" ></td>
              </tr> 

              @endif
                    
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