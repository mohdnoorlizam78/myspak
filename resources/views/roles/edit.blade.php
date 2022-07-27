@extends('layouts.master')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('roles')}}">Peranan</a></li>
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
        <span>Senarai Peranan</span>
       
      </h5>

        <div class="card-body">
        <form action="{{ url('roles/update', [$data_roles->id]) }}" method="POST" enctype="multipart/form-data">
      
            @csrf <!-- token untuk secure data yang dihantar -->
            <!-- {{ method_field('PUT') }} -->
            <!-- {{ csrf_field() }}  -->            
           
            <div class="form-group">
              <label for="id" class="col-sm-2 control-label">ID</label>
                <div class="col-sm-10">                  
                    <input id="id" name="id" value={{ old('id', isset($data_roles) ? $data_roles->id : '') }} type="text"  class="form-control" readonly>
                </div>              
            </div>

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Nama peranan  </label>
                <div class="col-sm-10">
                <input id="name" name="name" value="{{$data_roles->name}}" type="text" class="form-control" >
                    </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Peranan </label>
                <div class="col-sm-10">
                <select name="permissions[]" id="permissions" class="form-control select2" multiple="multiple" required>
                        @foreach($data_permissions as $id => $permissions)
                            <option value="{{ $id }}" {{ (in_array($id, old('permissions', [])) || isset($data_roles) && $data_roles->permissions->contains($id)) ? 'selected' : '' }}>{{ $permissions }}</option>
                        @endforeach
                    </select> </div>
            </div>
               
       
   
            <div class="modal-footer">
            
            <a class="btn btn-light" href="{{url('/roles')}}" >
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
