@extends('layouts.master')
 
@section('content')
 
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Kebenaran</li>
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <!-- <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button> -->
                    <a href="{{ url('permissions') }}" class="btn btn-sm btn-flat btn-secondary"><i class="fa fa-refresh"></i> Refresh</a>
                    <a href="{{ url('permissions/add') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Rekod</a>
                  
                </p>
            </div>
            <div class="box-body">
               
                <div class="table-responsive">
                    <table class="table table-hover myTable">
                    <thead>
                      <!-- <tr>
                      <th><input type="checkbox" name="" id="" class="selectall"></th> 
                        <th><input type="submit" class="btn btn-danger" value="Padam Pilihan" onclick="return confirm('Anda pasti untuk hapuskan data?')" ></th> -->
                        <th>#</th>
                        <th>#</th>
                        <th>Kebenaran</th>                
                        <th></th>
                                      
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($data_permission as $key => $permission)
                      <tr>
                        
                        <td><input type="checkbox" value="{{$permission->id}}" name="delete[]" class="checkthis"></td>                  
                        <!-- <td>{{$loop->iteration}}</td> -->
                        <td>{{$loop->remaining+1}}</td>
                        <td>{{ $permission->name }}</td>
                      
                        <td class="text-right py-0 align-middle">
                        <div style="width:80px">
                            <a href="{{ url('permissions/edit', $permission->id)}} "  ><i style="color:orange"class="fas fa-pencil-alt"></i></a>
                            <a href=" {{ url('permissions/delete', $permission->id)}}"  onclick="return confirm('Anda pasti untuk hapuskan data?')" ><i style="color:red" class="fas fa-trash "></i></a>
                            <a href="{{ url('permissions/show', $permission->id)}} " ><i class="far fa-eye"></i></a>
                        </div>
                        </td>
                      </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda pasti untuk hapuskan data?')" > Padam Pilihan </button>
     
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
 
        $('.btn-filter').click(function(e){
            e.preventDefault();
           
            $('#modal-filter').modal();
        })
 
    })
</script>
 
<script type="text/javascript">
   $('.selectall').click(function(){
        $('.selectbox').prop('checked', $(this).prop('checked'));
        
    })
   
    $('.selectbox').change(function(){
        var total = $('.selectbox').length;
        var number = $('.selectbox:checked').length;
        if(total == number){
            $('.selectall').prop('checked', true);
             
        }else{
            $('.selectall').prop('checked', false);
            
        }
    })

</script>

@endsection