@extends('layouts.master')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif
<div class="card-body">

{!! Form::model($data_pengguna, ['method' => 'PATCH','route' => ['users.update', $data_pengguna->id]]) !!}
<div class="row">
        <div class="col-12 col-sm-6 col-md-3">
        <div class="form-group">
            <strong>Nama pengguna:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
        </div>
     
        <div class="col-12 col-sm-6 col-md-3">
        <div class="form-group">
            <strong>Emel:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
        <div class="form-group">
            <strong>Katalaluan:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
        <div class="form-group">
            <strong>Pengesahan Katalaluan:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
        </div>
        <!-- <div class="col-12 col-sm-6 col-md-3">
        <div class="form-group">
            <strong>Peranan:</strong>
            {!! Form::select('roles[]', $data_pengguna,$data_roles, array('class' => 'form-control','multiple')) !!}
        </div>
        </div> -->
        <div class="col-12 col-sm-6 col-md-3">
        <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Peranan </label>
                <div class="col-sm-10">
                    <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                    @foreach($data_roles as $id => $roles)
                    <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($data_pengguna) && $data_pengguna->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                        @endforeach
                    </select>
                </div>              
            </div>
            </div>
            
        <div class="col-12 col-sm-6 col-md-3">
        <div class="form-group">
              <label for="status" class="col-sm-2 control-label">Status pengguna</label>
              <div class="col-sm-10">
                <select name="status" class="form-control" id="status">
                    <option value="Aktif" @if($data_pengguna->status == 'Aktif') selected @endif>Aktif</option>
                    <option value="Tidak aktif" @if($data_pengguna->status == 'Tidak aktif') selected @endif>Tidak aktif</option>                           
                </select>
              </div>
          </div>
          </div>

          

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Kemas kini</button>
    </div>
</div>
{!! Form::close() !!}
</div>
@endsection