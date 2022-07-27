@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Aduan Kerosakan</li>
</ol>

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
        </div>
         
    </div>
    </form>

            <div class="card">
            
              <div class="card-header">
                <h3 class="card-title">Senarai aduan kerosakan aset tak alih</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <a href="{{ url('asettakalih') }}" class="btn btn-sm btn-flat btn-secondary"><i class="fa fa-refresh"></i> Refresh</a>
                    <a href="{{ url('asettakalih/add') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Rekod</a>
                    
                    

                    </br>
                    </br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                <th></th>
                                <th>#</th>
                                <th>Pelapor</th>
                                <th>Perkara</th>
                                <th>Status</th>                               
                                <th>Lokasi</th>
                                <th>Keutamaan</th>                               
                                <th>Tarikh dilaporkan</th>
                                <th>Tarikh kemaskini</th>
                                
                                                                
                            </tr>
                        
                  </thead>
                  <tbody>
                  @foreach($customer_data as $e=>$dt)
                            <tr>
                                <td>
                                    <div >
                                        <!-- <a href="{{ url('asettakalih/'.$dt->id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a> -->
                                        <a href="{{ url('dynamicpdf/show', $dt->id) }} "  class="btn btn-info btn-sm"><i class="far fa-eye"></i></a>
                                        <a href="{{ url('dynamicpdf/edit', $dt->id) }} "  class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                        <a href=" {{ url('dynamicpdf/delete', $dt->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda pasti untuk hapuskan data?')" ><i class="fas fa-trash"></i></a>
                                        <a href="{{ url('dynamicpdf/pdf', $dt->id) }} " target="_blank" style="font-size:24px;color:red"><i class="far fa-file-pdf"></i></a>
                                       
                              <!-- <a href="{{ url('laporrosak/'.$dt->id) }}" class="btn btn-info btn-xs" id="show"><i class="fa fa-eye"></i></a> -->
                                        </div>
                                </td>
                                <!-- <td>{{ $e+1 }}</td> -->
                                <td>{{$loop->remaining+1}}</td>
                                <td>{{$dt->users->name}}</td>
                                <td>{{$dt->keterangan_rosak}}</td>
                               
                                <td><a href="{{url('asettakalih/show',$dt->id) }} ">{{$dt->status_aduan->name}}</a></td>
                                <td>{{$dt->lokasi->nama_lokasi}}</td>
                                <td>{{$dt->keutamaan->nama_keutamaan}}</td>
                               
                               
                                <td>{{ date('d F Y',strtotime($dt->created_at)) }}</td>
                                <td>{{ date('d F Y',strtotime($dt->updated_at)) }}</td>
                                                           
                            </tr>
                            @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                                <th></th>
                                <th>#</th>
                                <th>Pelapor</th>
                                <th>Perkara</th>
                                <th>Status</th>                               
                                <th>Lokasi</th>
                                <th>Keutamaan</th>
                                <th>Tarikh dilaporkan</th>
                                <th>Tarikh kemaskini</th>
                                
                                                                
                            </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



@endsection