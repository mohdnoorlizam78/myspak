@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Album</li>
</ol>

@if ($message = Session::get('berjaya'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

@endif

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Pengurusan album</h2>
        </div>
       
    </div>
</div>
 
            <div class="card-body">
                <div style="text-align:right">
                    <a class="btn btn-success" href="{{ route('gambar.create') }}"> Tambah album</a>
                </div>
                <br>
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Bil</th>
                    <th>Nama gambar</th>
                    <th>Gambar</th>
                    <th width="280px">Tindakan</th>
                    </tr>
                      
                </thead>
                <tbody>
                @foreach ($dataalbum as $key => $album)
                          <tr>
                                                         
                              <td>{{$loop->remaining+1}}</td>
                              <td>{{ $album->nama_gambar }}</td>
                              <td><img src="gambar/{{$album->gambar1}}"></td>
                                
                                <td>
                               
                                    <a href="{{ url('gambar/edit', $album->id)}} "  ><i style="color:orange"class="fas fa-pencil-alt"></i></a>
                                    <a href=" {{ url('gambar/destroy', $album->id)}}"  onclick="return confirm('Anda pasti untuk hapuskan data?')" ><i style="color:red" class="fas fa-trash "></i></a>
                                    <a href="{{ url('gambar/show', $album->id)}} " ><i class="far fa-eye"></i></a>
                        
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