@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Pengurusan pengguna</li>
</ol>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Pengurusan pengguna</h2>
        </div>
       
    </div>
</div>
 
            <div class="card-body">
                <div style="text-align:right">
                    <a class="btn btn-success" href="{{ route('users.create') }}"> Tambah pengguna</a>
                </div>
                <br>
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Bil</th>
                    <th>Nama</th>
                    <th>Emel</th>
                    <th>Peranan</th>
                    <th width="280px">Tindakan</th>
                    </tr>
                      
                </thead>
                <tbody>
                @foreach ($data as $key => $user)
                          <tr>
                                                         
                          <td>{{$loop->remaining+1}}</td>
                              <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                                </td>
                                <td>
                                <!-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!} -->
                                    <a href="{{ url('users/edit', $user->id)}} "  ><i style="color:orange"class="fas fa-pencil-alt"></i></a>
                                    <a href=" {{ url('users/delete', $user->id)}}"  onclick="return confirm('Anda pasti untuk hapuskan data?')" ><i style="color:red" class="fas fa-trash "></i></a>
                                    <a href="{{ url('users/show', $user->id)}} " ><i class="far fa-eye"></i></a>
                        
                                </td>             
                          </tr>
                          @endforeach
                </tbody>
                <tfoot>
              
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          



@endsection