@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('gambar')}}">Gambar</a></li>
    <li class="breadcrumb-item active">Tambah rekod</li>
</ol>
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
             
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    </p>
                </div>
                <div class="box-body">
                
                    <form role="form" method="POST" action="{{ url('gambar/update',[$dataalbum->id])}}" enctype="multipart/form-data">
                        @csrf
                        <!-- {{ method_field('PUT') }} -->
                    <div class="box-body">

                            <div class="form-group">
                                <label for="nama_gambar">Nama Gambar</label>
                                <input id="nama_gambar" type="text" name="nama_gambar" value="{{ $dataalbum->nama_gambar }}" class="form-control">
                                @error('nama_gambar')
                                {{$message}}
                                @enderror
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