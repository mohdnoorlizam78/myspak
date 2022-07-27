@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('asettakalih')}}">Aduan Kerosakan Aset Tak Alih</a></li>
    <li class="breadcrumb-item active">Edit</li>
</ol>

<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <h4>{{ $title }}</h4>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    </p>
                </div>
                <div class="box-body">
                
                    <form role="form" method="post" action="{{ url('asettakalih/update', [$dt->id]) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                    <div class="box-body">

                    @if(auth()->user()->isBppa())
                            <div class="form-group">
                                <label for="no_aduan">No. Aduan</label>
                                    
                                    <!-- <?php 
                                    
                                    $no_aduan_lama = 1;
                                    $no_aduan_baru = $no_aduan_lama + 1;

                                    ?>
                                    <input id="no_aduan" name="no_aduan" type="text" class="form-control" value=<?php echo "ILPSdr/ATA/".date("M/Y/")."$no_aduan_baru"; ?> -->
                                    <input id="no_aduan" name="no_aduan" type="text" class="form-control" required > 
                            
                            </div>
                        @endif

                            <div class="form-group">
                                <input id="nama_pelapor_id" name="nama_pelapor_id" value="{{Auth::user()->id}}" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="no_tel">No. Telefon</label>
                                <input id="no_tel" type="text" value="{{ $dt->no_tel }}" name="no_tel" class="form-control" readonly >
                            </div>                           

                            <div class="form-group">
                                <label for="bahagian_unit_id">Bahagian/Unit</label>
                                <input id="bahagian_unit_id" name="bahagian_unit_id" type="text" class="form-control" value="{{ $dt->bhgn_unit->nama_bahagian }}" readonly>
                
                            </div>  

                            <div class="form-group">
                                <!-- <label for="premis">Premis</label> -->
                                <input id="premis" name="premis" value="Institut Latihan Perindustrian Selandar" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <!-- <label for="no_dpa">No. DPA</label> -->
                                <input id="no_dpa" name="no_dpa" value=" 1114111MYS.040214.BE0001" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="skop_perkhidmatan_id">Skop Perkhidmatan</label>
                                <input id="skop_perkhidmatan_id" name="skop_perkhidmatan_id" type="text" class="form-control" value="{{ $dt->s_perkhidmatan->nama_skop }}" readonly>
                
                            </div>   

                            <div class="form-group">
                                <label for="lain_skop"  style="color:red">Lain-lain skop perkhidmatan</label>
                                <input id="lain_skop" name="lain_skop" type="text" class="form-control" value="{{ $dt->lain_skop }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="mod_aduan_id">Mod Aduan</label>
                                <input id="mod_aduan_id" name="mod_aduan_id" type="text" class="form-control" value="{{ $dt->m_aduan->nama_mod }}" readonly>
                
                            </div> 

                            <div class="form-group">
                                <label for="lain_mod"  style="color:red">Lain-lain mod aduan</label>
                                <input id="lain_mod" name="lain_mod" type="text" class="form-control" value="{{ $dt->lain_mod }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="lokasi_id">Lokasi</label>
                                <input id="lokasi_id" name="lokasi_id" type="text" class="form-control" value="{{ $dt->lokasi->nama_lokasi }}" readonly>
                           
                            </div> 

                            <div class="form-group">
                                <label for="lokasi_lain" style="color:blue">Jika lokasi lain*</label>
                                <input id="lokasi_lain" name="lokasi_lain" type="text" class="form-control" value="{{ $dt->lokasi_lain }}" readonly >
                            </div> 

                            <div class="form-group">
                                <label for="aras_id">Aras</label>
                                <input id="aras_id" name="aras_id" type="text" class="form-control"value="{{ $dt->aras->nama_aras }}" readonly >
                          
                            </div>

                            <div class="form-group">
                                <label for="nama_no_bilik" style="color:red"> Nama / No Bilik (Jika ada)*</label>
                                <input id="nama_no_bilik" name="nama_no_bilik" type="text" class="form-control" value="{{ $dt->nama_no_bilik }}" readonly>
                            </div> 

                            <div class="form-group">
                                <label for="keterangan_rosak">Perkara kerosakan</label>
                                <input id="keterangan_rosak" name="keterangan_rosak" type="text" class="form-control" value="{{ $dt->keterangan_rosak }}" readonly>
                            </div>
                    
                            <div class="form-group">
                                <label for="keutamaan_id">Keutamaan</label>
                                <input id="keutamaan_id" name="keutamaan_id" type="text" class="form-control" value="{{ $dt->keutamaan->nama_keutamaan }}" readonly>
                            
                            </div>                     
                        
                            <div class="form-group">
                                <label for="editborang" class="col-sm-2 control-label">Borang aduan(JKR.PATA.F7/2)</label>
                                    <div class="col-sm-10">                  
                                    <input id="muatturun" name="muatturun" type="text" class="form-control" value="{{ $dt->muatturun }}" readonly >
                                    </div>              
                                </div>

                            <div class="form-group">
                                <label for="editgambar1" class="col-sm-2 control-label">Gambar 1</label>
                                <div class="col-sm-10">                  
                                <img src="{{asset('aduanrosak/'. $dt->gambar_1)}}" class="img-responsive" alt="Image" width="400" height="300" class="img-responsive" alt="Image" width="400" height="300" readonly>
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="editgambar2" class="col-sm-2 control-label">Gambar 2</label>
                                <div class="col-sm-10">                  
                                <img src="{{asset('aduanrosak/'. $dt->gambar_2)}}" class="img-responsive" alt="Image" width="400" height="300" class="img-responsive" alt="Image" width="400" height="300" readonly>
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="catatan_pengadu">Catatan pengadu</label>
                                <input id="catatan_pengadu" name="catatan_pengadu" type="text" class="form-control" value="{{ $dt->catatan_pengadu }}" readonly>
                            
                            </div>

                           
                            <div class="form-group">
                                <label for="pegawai_penerima_id">Pegawai penerima</label>
                                <select id="pegawai_penerima_id" name="pegawai_penerima_id" class="form-control" >
                                    <option value="">-- Pilih Nama Pegawai --</option>
                                        @foreach ($data_pengguna as $penerima)
                                            <option value="{{$penerima->id}}" {{($dt->pegawai_penerima_id == $penerima->id) ?'selected' : '' }} >{{$penerima->name}}</option>
                                              
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="jawatan_id">Jawatan</label>
                                <select id="jawatan_id" name="jawatan_id" class="form-control" >
                                    <option value="">-- Pilih Nama Jawatan --</option>
                                        @foreach ($data_jawatan as $jawatan)                                            
                                            <option value="{{$jawatan->id}}" {{($dt->jawatan_id == $jawatan->id) ?'selected' : '' }} >{{$jawatan->nama_jawatan}}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group">
                            <label for="jawatan_id">Status</label>
                                 
                                <select id="status_id" name="status_id" class="form-control" >
                                    <option value="">-- Pilih Status --</option>
                                        @foreach ($data_status as $status)
                                            <option value="{{$status->id}}" {{($dt->status_id == $status->id) ?'selected' : '' }} >{{$status->nama_status}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="catatan_penerima">Catatan penerima</label>
                                <input id="catatan_penerima" name="catatan_penerima" type="text" class="form-control" value="{{ $dt->catatan_penerima }}" >
                            
                            </div>
                            
    
                                        
                    </div>
                    <!-- /.box-body -->
        
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Hantar</button>
                        <button type="reset" class="btn btn-warning">Reset</button> 
                    </div>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection