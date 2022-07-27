@extends('layouts.master')


@section('content')

  
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<div class="card">
            
    <div class="card-header">
        <h3 class="card-title">Senarai peranan</h3>
        
    </div>
    <div class="col-md-12 text-right">
    <a href="{{ url('roles') }}" class="btn  btn-secondary"><i class="fa fa-refresh"></i> Refresh</a>
                   
        <a class="btn btn-success" href="{{ route('roles.create') }}"> <i class="fa fa-plus"></i> Tambah Rekod</a>
    </div> 
    <br>        

        <table id="example1" class="table table-bordered table-striped">
       
       <thead>
       <tr>
           <th>No</th>
           <th>Nama peranan</th>
           <th>Kebenaran</th>
           <th width="280px">Tindakan</th>
                                                     
       </tr>
             
       </thead>
       <tbody>
       @foreach ($roles as $key => $roles)
     <tr>
      
       <td>{{$loop->remaining+1}}</td>
       <td>{{ $roles->name ?? '' }}</td>
       <td>
           @foreach($roles->permissions as $key => $item)
               <span class="badge badge-info">{{ $item->name }}</span>
           @endforeach
       </td>
       <td class="text-right py-0 align-middle">
               <div style="width:80px">
                 <!-- <a href="{{ url('/roles/edit', [$roles->id]) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>

                 <button href="{{ url('/roles/destroy', [$roles->id]) }}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button>
                   <a href="{{ url('roles/show', [$roles->id]) }} "  class="btn btn-info btn-xs" id="show"><i class="fa fa-eye"></i></a>
                  -->
                   <a href="{{ url('roles/edit', [$roles->id])}} "  ><i style="color:orange"class="fas fa-pencil-alt"></i></a>
                           <a href=" {{ url('roles/delete', [$roles->id])}}"  onclick="return confirm('Anda pasti untuk hapuskan data?')" ><i style="color:red" class="fas fa-trash "></i></a>
                           <a href="{{ url('roles/show', [$roles->id])}} " ><i class="far fa-eye"></i></a>
                
                 
                 </div>
               </td>
     </tr>
       @endforeach
       </tbody>
 
     </table>





    
</div>

@endsection