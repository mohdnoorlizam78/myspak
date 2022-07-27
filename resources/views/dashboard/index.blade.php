@extends('layouts.master')
 
@section('content')

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Aduan Aset Tak Alih</span>
                <span class="info-box-number"><h3 style="text-align:center">{{$data_aduanrosak->count()}}</h3></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Aduan Selesai</span>
                <span class="info-box-number"><h3 style="text-align:center">{{number_format($data_rosak_selesai)}}</h3></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Aduan Dalam proses</span>
                <span class="info-box-number"><h3 style="text-align:center">{{number_format($data_rosak_dalam_proses)}}</h3></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Aduan Belum Selesai</span>
                <span class="info-box-number"><h3 style="text-align:center">{{ number_format($data_rosak_belum_selesai)}}</h3></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          
        </div>
        <!-- /.row -->
      
  
   
 
        <div class="card">
              <div class="card-header">
              <a class="text1">Laporan kerosakan terkini</a>
                
              </div>
              

              <div style="text-align:right;" class="col-sm-12">
              <a  href="{{ url('asettakalih/add') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus-circle"></i> Aduan Baru</a>
              <br>
                   
              </div>
              <div >
                    <!-- @can('borang-create') -->
                   
                    <!-- @endcan -->
                    
              </div>
              
              <table id="table3" class="table table-bordered table-striped">
              
                <thead>
                
                <tr>
                               
                              <th>#</th>
                              <th>Pelapor</th>
                              <th>Perkara</th>
                              <th>Lokasi</th>
                              <th>Status</th> 
                              <th>Tindakan</th>
                              <th>Keutamaan</th>                               
                              <th>Tarikh dilaporkan</th>
                                             
                          </tr>
                      
                </thead>
                <tbody>
                @foreach($data_rosak_belum_selesai_papar as $e=>$dt)
                          <tr>
                              
                              <!-- <td>{{ $e+1 }}</td> -->
                              <td>{{$loop->remaining+1}}</td>
                              <td>{{$dt->users->name}}</td>
                             
                              <td><a href="{{url('asettakalih/paparan',$dt->id)}}">{{$dt->keterangan_rosak}}</a></td>
                              <td>{{$dt->lokasi->nama_lokasi}}
                    
                              <td><span class="badge badge-danger">{{$dt->status_aduan->nama_status}}</span></td>
                              <td>{{$dt->tindakan->nama_tindakan}}</td>
                              <td>{{$dt->keutamaan->nama_keutamaan}}</td>
                              <td>{{ date('d F Y',strtotime($dt->created_at)) }}</td>
                                               
                          </tr>
                          @endforeach
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>

            </div>


      </div><!--/. container-fluid -->


      

@endsection