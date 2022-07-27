@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('asettakalih')}}">Aduan Kerosakan</a></li>
    <li class="breadcrumb-item active">Terperinci</li>
</ol>

 
<div class="container-fluid">

<div class="card">
 
    <div class="card-header">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 100%;">
                        <div style="text-align: center;"><span style=' font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>TATACARA PENGURUSAN ASET TAK ALIH</span></div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 100%;">
                        <div style="text-align: center;"><span style='font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>BORANG ADUAN / PERMINTAAN PELANGGAN</span></div>
                    </td>
                </tr>
            </tbody>
        </table>

    
    </div>
              <div class="card-body">
              <table style="width: 100%;">
        <tbody>
            <div style="text-align:right;">
                <!-- <a href="{{ url('dynamicpdf/pdf') }} "  class="btn btn-app bg-danger" >                   
                    <i class="fas fa-file-pdf"></i> PDF
                </a> -->
                <h5 class="card-header"><a href="{{url('dynamicpdf/pdf', $order->id)}}" target="_blank" class=" btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-download fa-sm text-white-50"></i> Muat turun PDF</a>

            </div>
            
           <tr>
                <td style="width: 10%;">No. Aduan</td>
                <td style="width: 50%;">: {{$order->no_aduan}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">Nama Pelapor</td>
                <td style="width: 50%;">: {{$order->users->name}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">No. Telefon</td>
                <td style="width: 50%;">: {{$order->no_tel}}</td>
            </tr>
            <tr>
                <td style="width: 10%;">Bahagian / Unit</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Premis</td>
                <td style="width: 50%;">: Institut Latihan PErindustrian Selandar</td>
            </tr>
            <tr>
                <td style="width: 10%;">No. DPA</td>
                <td style="width: 50%;">: 1114111MYS.040214.BE0001</td>
            </tr>
            <tr>
                <td style="width: 10%;">Tarikh/Masa</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Skop Perkhidmatan</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Lain-lain Skop Perkhidmatan</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Mod Aduan</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Lain-lain Mod Aduan</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Keutamaan</td>
                <td style="width: 50%;">:</td>
            </tr>
        </tbody>
    </table>
    <p><br></p>
    <p>CATATAN ADUAN</p>
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td style="width: 10%;">Lokasi</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Lain-lain lokasi</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Aras</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Nama / No Bilik (Jika ada)</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;"><br><br><br>Keterangan kerosakan<br><br><br><br></td>
                <td style="width: 50%;"><br>:<br><br></td>
            </tr>
            <tr>
                <td style="width: 10%;">Nama Penerima</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Jawatan</td>
                <td style="width: 50%;">:</td>
            </tr>
            <tr>
                <td style="width: 10%;">Tarikh/Masa</td>
                <td style="width: 50%;">:</td>
            </tr>
        </tbody>
    </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
</div>

@endsection