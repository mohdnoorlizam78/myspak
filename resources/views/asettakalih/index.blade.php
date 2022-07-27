@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Aduan Kerosakan Aset Tak Alih</li>
</ol>
<!-- Info boxes -->
<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Aduan Aset Tak Alih</span>
                <span class="info-box-number"><h3 style="text-align:center">{{$data_rosak->count()}}</h3></span>
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
              <h3 class="card-title">Senarai aduan kerosakan aset tak alih</h3>
            </div>
            <form role="form" action="{{ url('asettakalih/periode') }}" method="get">
      <div class="card-body">
                <div class="row">
        <label>Dari tarikh:</label>
        <div class="col-2">
            <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="dari" autocomplete="off" value="{{ date('Y-m-d') }}" />
                <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            </div>
 
    
        <label>hingga tarikh:</label>
        <div class="col-2">
        <div class="input-group date" id="reservationdate2" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="sampai" autocomplete="off" value="{{ date('Y-m-d') }}"/>
            <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        </div>   
        <button type="submit" class="btn btn-sm btn-flat btn-success btn-filter"><i class="fa fa-filter"></i> Cari</button> 
        &nbsp;
        <a href="{{ url('asettakalih') }}" class="btn btn-sm btn-flat btn-secondary"><i class="fa fa-refresh"></i> Refresh</a>
        &nbsp;
        <a href="{{ url('asettakalih/add') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Rekod</a>
    </form>     
    </div>
    
            <!-- /.card-header -->
            <div class="card-body">
                
                 
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                              <th></th>
                              <th>#</th>
                              <th>No. Aduan</th>
                              <th>Tarikh dilaporkan</th>
                              <th>Pelapor</th>
                              <th>Perkara</th>
                              <th>Lokasi</th>
                              <th>Lokasi lain</th>
                              <th>Status</th>  
                              <th>Tindakan</th>  
                              <th>Catatan Penerima</th>                               
                              
                              <!-- <th>Tarikh kemaskini</th> -->
                               
                                                              
                          </tr>
                      
                </thead>
                <tbody>
                @foreach($data_rosak as $e=>$dt)
                          <tr>
                              <td style="white-space:nowrap">
                                  <div column-width: 100px;>
                                      <!-- <a href="{{ url('asettakalih/'.$dt->id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a> -->
                                      <!-- <a href="{{ url('asettakalih/show', $dt->id) }} " ><i class="far fa-eye"></i></a> -->
                                      <!-- <a href="{{ url('siasatan_penyelenggaraan/tindakan_siasat', $dt->id) }} "  ><i class="fas fa-pencil-alt"></i></a> -->
                                        @if(auth()->user()->isAdmin())
                                            <a href=" {{ url('asettakalih/delete', $dt->id) }}"  onclick="return confirm('Anda pasti untuk hapuskan data?')" ><i class="fas fa-trash"></i></a>
                                            <!-- <a href="{{ url('siasatan_penyelenggaraan/tindakan_siasat', $dt->id) }} "  ><i class="fas fa-pencil-alt"></i></a>
                                            <a href="{{ url('asettakalih/pdf', $dt->id) }} " target="_blank" style="color:red"><i class="far fa-file-pdf"></i></a> -->
                                        @endif
                                        @if(auth()->user()->isBppa() && auth()->user()->isPengaduRosak())
                                        <a href="{{ url('asettakalih/edit', $dt->id) }} "  ><i class="fas fa-pencil-alt"></i></a>
                                         @endif
                                        <a href="{{ url('asettakalih/pdf', $dt->id) }} " target="_blank" style="color:red"><i class="far fa-file-pdf"></i></a>
                                        
                                        
                                     
                            <!-- <a href="{{ url('laporrosak/'.$dt->id) }}" class="btn btn-info btn-xs" id="show"><i class="fa fa-eye"></i></a> -->
                                      </div>
                              </td>
                              <!-- <td>{{ $e+1 }}</td> -->
                              <td>{{$loop->remaining+1}}</td>
                              <td>{{$dt->no_aduan}}</td>
                              <td>{{ date('d F Y',strtotime($dt->created_at)) }}</td>
                              <td>{{$dt->users->name}}</td>
                              <td><a href="{{url('asettakalih/paparan',$dt->id)}}">{{$dt->keterangan_rosak}}</a></td>
                              <td>{{$dt->lokasi->nama_lokasi}}</td>
                              <td>{{$dt->lokasi_lain}}</td>
                              
                              @if($dt->status_id == 1)
                                <td><span class="badge badge-success" >{{$dt->status_aduan->nama_status}}</span></td>
                                    @elseif($dt->status_id == 2)
                                        <td><span class="badge badge-danger">{{$dt->status_aduan->nama_status}}</span></td>
                                            @else
                                            <td><span class="badge badge-warning">{{$dt->status_aduan->nama_status}}</span></td>
                              @endif
                              <td>{{$dt->tindakan->nama_tindakan}}</td>
                              <td>{{$dt->catatan_penerima}}</td>
                                                           
                              <!-- <td>{{ date('d F Y',strtotime($dt->updated_at)) }}</td> -->
                               
                               
                                                     
                          </tr>
                          @endforeach
                </tbody>
                <tfoot>
                <!-- <tr>
                              <th></th>
                              <th>#</th>
                              <th>Pelapor</th>
                              <th>Perkara</th>
                              <th>Status</th>                               
                              <th>Lokasi</th>
                              <th>Keutamaan</th>
                              <th>Tarikh dilaporkan</th>
                              <th>Tarikh kemaskini</th>
                              <th>Tindakan</th>
                              
                                                              
                          </tr> -->
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->




@endsection