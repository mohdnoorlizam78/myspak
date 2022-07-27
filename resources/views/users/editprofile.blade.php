@extends('layouts.master')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
    <!-- <li class="breadcrumb-item"><a href="{{url('roles')}}">Pengguna</a></li>
    <li class="breadcrumb-item active">Terperinci</li> -->
</ol>

<div class="row">
  <div class="col-12">

    <div class="card">
     

        <div class="card-body">
        <form action="{{ url('users/updatePassword', [$data_pengguna->id]) }}" method="POST" enctype="multipart/form-data">
      
            @csrf <!-- token untuk secure data yang dihantar -->
            <!-- {{ csrf_field() }}  -->            
           
               
                <div class="form-group">
                    <label for="name">Nama pengguna  </label>
                    <input id="name" name="name" value="{{$data_pengguna->name}}" type="text" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="email">Emel  </label>
                    <input id="email" name="email" value="{{$data_pengguna->email}}" type="text" class="form-control" >
                </div>

                <div class="form-group">
                <label for="password">Katalaluan</label>
                <input type="password" id="password" name="password" class="form-control">
                
            </div>

            <div class="modal-footer">
            
                <a class="btn btn-light" href="{{url('/users')}}" >Batal</a>   
                <button type="submit" class="btn btn-warning">Kemaskini</button>
                       
            </div>
            </form> 
      
        </div><!-- /.card-body -->

      
    </div><!-- /.card -->
  </div><!-- /.col-12 -->
</div> <!-- /.row -->
     



@endsection
