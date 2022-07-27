@extends('layouts.master')
@section('content')

@if ($message = Session::get('berjaya'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

@endif


<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Kebenaran</li>
</ol>

<div class="row">
  <div class="col-12">
  <h4>{{ $title }}</h4>
    <div class="card">
      <!-- <div class="card-header">
        <h3 class="card-title">Senarai aduan kerosakan</h3>
      </div> -->
      <!-- /.card-header -->
      <h5 class="card-header d-flex justify-content-between align-items-baseline flex-wrap">
        <span>Senarai Kebenaran</span>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#permissionsModal" ><i class="fa fa-plus-circle"></i> Tambah Rekod </button>
       
      </h5>

        <div class="card-body">
        <form action="{{url('permissions/delete')}}" method="POST">
          @csrf
            <table id="example1" class="table table-bordered table-hover" style="width:100%">
              <thead>
              <!-- <tr>
              <th><input type="checkbox" name="" id="" class="selectall"></th> 
                <th><input type="submit" class="btn btn-danger" value="Padam Pilihan" onclick="return confirm('Anda pasti untuk hapuskan data?')" ></th> -->
                <th></th>
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
                <td>{{ $permission->name ?? '' }}</td>
               
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="{{ url('/permissions/show', $permission->id) }} " class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="{{ url('/permissions/edit', $permission->id) }} " class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                     <a href="{{url('/permissions/destroy', [$permission->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Anda pasti untuk hapuskan data?')" ><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
                @endforeach
              </tbody>
            
          </table>

          <button type="submit" class="btn btn-danger" onclick="return confirm('Anda pasti untuk hapuskan data?')" > Padam Pilihan </button>
     
        </form>
        </div><!-- /.card-body -->
    </div><!-- /.card -->
  </div><!-- /.col-12 -->
</div> <!-- /.row -->


<!-- Modal -->
<div class="modal fade" id="permissionsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rekod Baru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <form id="permissionForm" class="needs-validation" novalidate action="{{url('permissions/create')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }} <!-- token untuk secure data yang dihantar -->

            <div class="modal-body">                    

              <div class="form-group">
                  <label for="name">Kebenaran </label>
                  <input id="name" name="name" type="text" class="form-control">
              </div>                    
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>

            </div>
            </form>

        </div>
    </div>
</div>
<!-- end modal -->


<script>

$(document).ready(function() {
    var printCounter = 0;

    $('#example1').DataTable({
        // "scrollY": 200,
        // "scrollX": true,
        "autoWidth": false, //step 1
            // columnDefs: [
            // { width: '100px', targets: 0 }, //step 2, column 1 out of 4
            // { width: '500px', targets: 1 }, //step 2, column 2 out of 4
            // { width: '100px', targets: 2 }  //step 2, column 3 out of 4
            // ],

        dom: 'Bfrtip',
        buttons: [
                    { extend: 'colvis', text: 'Paparan lajur' },
                    { extend: 'copy', text: 'Salin' },
                    {
                        extend: 'excel',
                        messageTop: 'Senarai rekod peranan di dalam sistem.'
                    },

                    {
                        extend: 'pdf',
                        title: 'Senarai rekod peranan di dalam sistem.',
                        download: 'open',
                        //messageTop: 'Senarai rekod kebenaran di dalam sistem.',
                        messageBottom: null
                    },

                    {
                        extend: 'print',
                        text: 'Cetak',
                        messageTop: function () {
                            printCounter++;

                            if ( printCounter === 1 ) {
                                return 'Anda telah cetak dokumen ini pertama kali.';
                            }
                            else {
                                return 'Anda telah cetak dokumen ini sebanyak '+printCounter+' kali';
                            }
                        },
                        messageBottom: null
                    }
                ],

                "pagingType" : "full_numbers",
                "language": {
                        search: '<i class="fa fa-filter" aria-hidden="true"></i>',
                        searchPlaceholder: 'Cari rekod',
                    "paginate" : {
                        "first" : "Pertama",
                        "previous" : "Sebelum",
                        "next" : "Seterusnya",
                        "last" : "Akhir"
                    },
                    "lengthMenu": "Paparan _MENU_ rekod per laman",
                    "zeroRecords": "Tiada data",
                    "info": "Laman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tiada rekod dijumpai",
                    "infoFiltered": "(dijumpai dari _MAX_ jumlah rekod)"
                }
        //         initComplete: function () {
        //     this.api().columns([1,2,4]).every( function () {
        //         var column = this;
        //         var select = $('<select><option value=""></option></select>')
        //             .appendTo( $(column.footer()).empty() )
        //             .on( 'change', function () {
        //                 var val = $.fn.dataTable.util.escapeRegex(
        //                     $(this).val()
        //                 );

        //                 column
        //                     .search( val ? '^'+val+'$' : '', true, false )
        //                     .draw();
        //             } );

        //         column.data().unique().sort().each( function ( d, j ) {
        //             select.append( '<option value="'+d+'">'+d+'</option>' )
        //         } );
        //     } );
        // }

            });
        });
//============================================================================



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
