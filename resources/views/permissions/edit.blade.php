@extends('layouts.master')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('permissions')}}">Kebenaran</a></li>
    <li class="breadcrumb-item active">Terperinci</li>
</ol>

<div class="row">
  <div class="col-12">

    <div class="card">
      <!-- <div class="card-header">
        <h3 class="card-title">Senarai aduan kerosakan</h3>
      </div> -->
      <!-- /.card-header -->
      <h5 class="card-header d-flex justify-content-between align-items-baseline flex-wrap">
        <span>Senarai kebenaran</span>
       
      </h5>

        <div class="card-body">
        <form action="{{ url('permissions/update', [$data_permission->id]) }}" method="POST" enctype="multipart/form-data">
      
            @csrf <!-- token untuk secure data yang dihantar -->
            {{ method_field('PUT') }}
            <!-- {{ csrf_field() }}  -->            
           
                <div class="form-group">
                    <label for="id">ID</label>
                    <input id="id" name="id" value="{{ old('id', isset($data_permission) ? $data_permission->id : '') }}" type="text"  class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="name">Jenis Kebenaran </label>
                    <input id="name" name="name" value="{{$data_permission->name}}" type="text" class="form-control" >
                </div>
               
       
   
            <div class="modal-footer">
            
            <a class="btn btn-light" href="{{url('/permissions')}}" >
            Batal
            </a>   
            <button type="submit" class="btn btn-warning">Kemaskini</button>
                       
            </div>
            </form> 
      
        </div><!-- /.card-body -->

      
    </div><!-- /.card -->
  </div><!-- /.col-12 -->
</div> <!-- /.row -->
     



@endsection
