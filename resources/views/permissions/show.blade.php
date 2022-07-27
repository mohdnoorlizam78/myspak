@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            

            <div class="box box-default">
          <div class="box box-solid">
          <div class="box-header">
                <p>
                <a href="{{ url('permissions') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-backward"></i> Kembali</a>
                </p>
            </div>
            <div class="box-header with-border">
              

              <div class="box-title"><h2><strong>Kebenaran</strong> </h2> </div>
            </div>
            <!-- /.box-header -->
            <div class="box box-warning">
            <div class="box-body">
              
              
             
           
                <div class="box-body">
                
                  <div class="card">
                    
                  <div class="card-body row">
                      <div class="col-md-6">
                        <dl class="dl-horizontal">
                        <h4>
                          <dt ><strong>Nama kebenaran: </strong> </dt>
                          <dd>{{ $data_permission->name }}</dd>
                         
                        </h4>
                        </dl>  
                      </div>
                      


                  </div><!-- /.card -->
                    
                </div><!-- /.col-12 -->
                             
        </div> <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
 
    })
</script>
 
@endsection