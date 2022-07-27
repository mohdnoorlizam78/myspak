@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('asettakalih')}}">Aduan Kerosakan Aset Tak Alih</a></li>
    <li class="breadcrumb-item active">Tambah rekod</li>
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
                
                    <form role="form" method="post" action="{{ url('asettakalih/add') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="box-body">

                    @if(auth()->user()->isBppa())
                            <div class="form-group">
                                <label for="no_aduan">No. Aduan</label>
                                    
                                    <!-- <?php 
                                    
                                    $no_aduan_lama = 1;
                                    $no_aduan_baru = $no_aduan_lama + 1;

                                    ?>
                                    <input id="no_aduan" name="no_aduan" type="text" class="form-control" value=<?php echo "ILPSdr/ATA/".date("M/Y/")."$no_aduan_baru"; ?> 
                                     -->
                                    <input id="no_aduan" name="no_aduan" type="text" class="form-control" required > 
                            
                            </div>
                        @endif

                            <div class="form-group">
                                <input id="nama_pelapor_id" type="hidden" name="nama_pelapor_id" value="{{Auth::user()->id}}" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="no_tel">No. Telefon</label>
                                <input id="no_tel" type="number" name="no_tel" class="form-control" required >
                            </div>

                            <div class="form-group">
                                <input id="status_id" type="hidden" name="status_id" value="2" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="bahagian_unit_id">Bahagian/Unit</label>
                                <select id="bahagian_unit_id" name="bahagian_unit_id" class="form-control" required>
                                    <option value="">-- Pilih bahagian/unit --</option>
                                        @foreach ($data_bahagian_unit as $bahagianunit)
                                            <option value="{{$bahagianunit->id}}" {{ old('bahagian_unit_id') == $bahagianunit->id ? 'selected' : null }} >{{$bahagianunit->nama_bahagian}}</option>
                                        @endforeach
                                </select>
                            </div>  

                            <div class="form-group">
                                <!-- <label for="premis">Premis</label> -->
                                <input id="premis" type="hidden" name="premis" value="Institut Latihan Perindustrian Selandar" class="form-control">
                            </div>

                            <div class="form-group">
                                <!-- <label for="no_dpa">No. DPA</label> -->
                                <input id="no_dpa" type="hidden" name="no_dpa" value=" 1114111MYS.040214.BE0001" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="skop_perkhidmatan_id">Skop Perkhidmatan</label>
                                <select id="skop_perkhidmatan_id" name="skop_perkhidmatan_id" class="form-control" required>
                                    <option value="">-- Pilih Skop Perkhidmatan --</option>
                                        @foreach ($data_skop_perkhidmatan as $skopperkhidmatan)
                                            <option value="{{$skopperkhidmatan->id}}" {{ old('skopperkhidmatan_id') == $skopperkhidmatan->id ? 'selected' : null }} >{{$skopperkhidmatan->nama_skop}}</option>
                                        @endforeach
                                </select>
                            </div>   

                            <div class="form-group">
                                <label for="lain_skop"  style="color:red">Lain-lain skop perkhidmatan</label>
                                <input id="lain_skop" name="lain_skop" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="mod_aduan_id">Mod Aduan</label>
                                <select id="mod_aduan_id" name="mod_aduan_id" class="form-control" required>
                                    <option value="">-- Pilih mod aduan --</option>
                                        @foreach ($data_mod_aduan as $modaduan)
                                            <option value="{{$modaduan->id}}" {{ old('mod_aduan_id') == $modaduan->id ? 'selected' : null }} >{{$modaduan->nama_mod}}</option>
                                        @endforeach
                                </select>
                            </div> 

                            <div class="form-group">
                                <label for="lain_mod"  style="color:red">Lain-lain mod aduan</label>
                                <input id="lain_mod" name="lain_mod" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="lokasi_id">Lokasi</label>
                                <select id="lokasi_id" name="lokasi_id" class="form-control" required>
                                    <option value="">-- Pilih lokasi --</option>
                                        @foreach ($data_lokasi as $lokasi)
                                            <option value="{{$lokasi->id}}" {{ ('lokasi_id' == $lokasi->id) ?'selected' : '' }} >{{$lokasi->nama_lokasi}}</option>
                                            @endforeach
                                    </select>
                            </div> 

                            <div class="form-group">
                                <label for="lokasi_lain" style="color:blue">Jika lokasi lain*</label>
                                <input id="lokasi_lain" name="lokasi_lain" type="text" class="form-control">
                            </div> 

                            <div class="form-group">
                                <label for="aras_id">Aras</label>
                                <select id="aras_id" name="aras_id" class="form-control" required>
                                    <option value="">-- Pilih aras --</option>
                                        @foreach ($data_aras as $aras)
                                            <option value="{{$aras->id}}" {{ ('aras_id' == $aras->id) ?'selected' : '' }} >{{$aras->nama_aras}}</option>
                                            @endforeach
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="nama_no_bilik" style="color:red"> Nama / No Bilik (Jika ada)*</label>
                                <input id="nama_no_bilik" name="nama_no_bilik" type="text" class="form-control">
                            </div> 

                            <div class="form-group">
                                <label for="keterangan_rosak">Perkara kerosakan</label>
                                <input id="keterangan_rosak" name="keterangan_rosak" type="text" class="form-control" >
                            </div>
                    
                            <div class="form-group">
                                <label for="keutamaan_id">Keutamaan</label>
                                <select id="keutamaan_id" name="keutamaan_id" class="form-control" required>
                                    <option value="">-- Pilih keutamaan --</option>
                                        @foreach ($data_keutamaan as $keutamaan)
                                            <option value="{{$keutamaan->id}}" {{ ('keutamaan_id' == $keutamaan->id) ?'selected' : '' }} >{{$keutamaan->nama_keutamaan}}</option>
                                        @endforeach
                                </select>
                            </div>                     
                        
                            <!-- <div class="form-group">
                                <label>Muatnaik borang aduan(JKR.PATA.F7/2) </label>
                                <input name="muatturun" type="file" id="file1" onchange="return fileValidation1()" class="form-control" required>
                            </div> -->


                            <div class="form-group">
                                <label  style="color:red">Gambar 1 (Hanya gambar jenis fail .jpeg .jpg .png sahaja) </label>
                                <input name="gambar_1" type="file" id="file2" onchange="return fileValidation2()" class="form-control">
                            </div>

                            <!-- Image preview -->
                            <div id="imagePreview2"></div>

                            <div class="form-group">
                                <label  style="color:red">Gambar 2 (Hanya gambar jenis fail .jpeg .jpg .png sahaja)</label>
                                <input name="gambar_2" type="file" id="file3" onchange="return fileValidation3()" class="form-control">
                            </div>

                            <!-- Image preview -->
                            <div id="imagePreview3"></div>
                            
                            <div class="form-group">
                                <label for="catatan_pengadu">Catatan pengadu</label>
                                <input id="catatan_pengadu" name="catatan_pengadu" type="text" class="form-control" >
                            </div>
                            
                            

                            @if(auth()->user()->isBppa())
                            <div class="form-group">
                                <label for="pegawai_penerima_id">Pegawai penerima</label>
                                <select id="pegawai_penerima_id" name="pegawai_penerima_id" class="form-control" required>
                                    <option value="">-- Pilih Nama Pegawai --</option>
                                        @foreach ($customer as $penerima)
                                            <option value="{{$penerima->id}}" {{ ('pegawai_penerima_id' == $penerima->id) ?'selected' : '' }} >{{$penerima->name}}</option>
                                            @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="jawatan_id">Jawatan</label>
                                <select id="jawatan_id" name="jawatan_id" class="form-control" required>
                                    <option value="">-- Pilih Nama Jawatan --</option>
                                        @foreach ($data_jawatan as $jawatan)
                                            <option value="{{$jawatan->id}}" {{ ('jawatan_id' == $jawatan->id) ?'selected' : '' }} >{{$jawatan->nama_jawatan}}</option>
                                            @endforeach
                                    </select>
                            </div>
                            @endif
    
                                        
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
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>


<script>
function fileValidation1(){
    var fileInput = document.getElementById('file1');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.pdf)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Hanya fail jenis .pdf sahaja.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview1').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
</script>

<script>
function fileValidation2(){
    var fileInput = document.getElementById('file2');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Hanya gambar jenis  .jpeg/.jpg/.png sahaja.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview2').innerHTML = '<img src="'+e.target.result+'"/width="500" height="300">';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
</script>

<script>
function fileValidation3(){
    var fileInput = document.getElementById('file3');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Hanya gambar jenis  .jpeg/.jpg/.png sahaja.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview3').innerHTML = '<img src="'+e.target.result+'"/ width="500" height="300">';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
</script>
@endsection