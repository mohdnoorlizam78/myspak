@extends('layouts.master')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
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
        <span>Senarai peranan</span>
       
      </h5>

        <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $data_roles->id }}  </td>
                    </tr>
                    <tr>
                        <th>Nama peranan</th>
                        <td>{{ $data_roles->name }} </td>
                    </tr>

                    <tr>
                        <th>
                            Kebenaran
                        </th>
                        <td>
                            @foreach($data_roles->permissions as $id => $permissions)
                                <span class="label label-info label-many">{{ $permissions->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                Sebelum
            </a>
        </div>

      
        </div><!-- /.card-body -->

      
    </div><!-- /.card -->
  </div><!-- /.col-12 -->
</div> <!-- /.row -->
     



@endsection
