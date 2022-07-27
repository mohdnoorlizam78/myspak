<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetTakAlih;
use App\Models\User;
use App\MissingUser;
use DB;
use PDF;

class DynamicPDFController extends Controller
{
    function index()
    {
     $customer_data = $this->get_customer_data();
     return view('dynamicpdf.index')->with('customer_data', $customer_data);
    }

    
    function get_customer_data()
    {
    //  $customer_data = DB::table('lapor_rosak_tak_alih')
    //      ->limit(10)
    //      ->get();
    $customer_data = AsetTakAlih::orderBy('created_at','desc')->get();
     return $customer_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    // function convert_customer_data_to_html()
    // {
    //  $customer_data = $this->get_customer_data();
    //  foreach($customer_data as $customer)
    //  {
    //     $output = '
    //         <h3 align="center">BORANG ADUAN / PERMINTAAN PELANGGAN</h3>
    //         <table width="100%" style="border-collapse: collapse; border: 0px;">
    //         <tr>
    //         <th style="border: 1px solid; padding:12px;" width="20%">No. Aduan</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->no_aduan.'</td>
    //         </tr>
    //         <tr>
    //         <th style="border: 1px solid; padding:12px;" width="30%">Nama Pelapor</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->users->name.'</td>
    //         </tr>
    //         <tr>
    //         <th style="border: 1px solid; padding:12px;" width="15%">No. Telefon</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->no_tel.'</td>
    //         </tr>
    //         <tr>
    //         <th style="border: 1px solid; padding:12px;" width="15%">Bahagian / Unit</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->keterangan_rosak.'</td>
    //         </tr>
    //         <tr>
    //         <th style="border: 1px solid; padding:12px;" width="20%">Premis</th>
    //         <td style="border: 1px solid; padding:12px;">Institut Latihan Perindustrian Selandar</td>
    //     </tr>
    //     <tr>
    //         <th style="border: 1px solid; padding:12px;" width="20%">No. DPA</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->keutamaan_id.'</td>
    //     </tr>
    //     <tr>
    //         <th style="border: 1px solid; padding:12px;" width="20%">Tarikh/Masa</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->keutamaan_id.'</td>
    //     </tr>
    //     <tr>
    //         <th style="border: 1px solid; padding:12px;" width="20%">Skop Perkhidmatan</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->keutamaan_id.'</td>
    //     </tr>
    //     <tr>
    //         <th style="border: 1px solid; padding:12px;" width="20%">Lain lain Skop Perkhidmatan</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->keutamaan_id.'</td>
    //     </tr>
    //     <tr>
    //         <th style="border: 1px solid; padding:12px;" width="20%">Mod Aduan</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->keutamaan_id.'</td>
    //     </tr>
    //     <tr>
    //         <th style="border: 1px solid; padding:12px;" width="20%">Lain lain Mod Aduan</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->keutamaan_id.'</td>
    //     </tr>
    //     <tr>
    //         <th style="border: 1px solid; padding:12px;" width="20%">Keutamaan</th>
    //         <td style="border: 1px solid; padding:12px;">'.$customer->keutamaan_id.'</td>
    //     </tr>
    //         <p>CATATAN ADUAN</p>
    //         <p><br></p>
            
    //         ';  
    //  }
     
    //  $output .= '</table>';

     
    //  return $output;
    // }

    function convert_customer_data_to_html()
    {
     $customer_data = $this->get_customer_data();
     foreach($customer_data as $customer)
     {
        $output = '
        <p style="text-align: right;">JKR.PATA.F7/2</p>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 99.8498%;">
                        <div style="text-align: center;"><span> TATACARA PENGURUSAN ASET TAK ALIH </span></div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 99.6997%;">
                        <div style="text-align: center;"><span> BORANG ADUAN / PERMINTAAN PELANGGAN </span></div>
                    </td>
                </tr>
            </tbody>
        </table>    
        <p><br></p>

        <table style="width: 100%;">
            <tbody>                
                <tr>
                    <td style="width: 30.1802%;">No. Aduan</td>
                    <td style="width: 69.6696%;">: '.$customer->no_aduan.'</td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">Nama Pelapor</td>
                    <td style="width: 69.6696%;">: '.$customer->users->name.'</td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">No. Telefon</td>
                    <td style="width: 69.6696%;">: '.$customer->no_tel.'</td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">Bahagian / Unit</td>
                    <td style="width: 69.6696%;">: '.$customer->bhgn_unit->nama_bahagian.'</td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">Premis</td>
                    <td style="width: 69.6696%;">: Institut Latihan Perindustrian Selandar</td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">No. DPA</td>
                    <td style="width: 69.6696%;">: 1114111MYS.040214.BE0001</td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">Tarikh/Masa</td>
                    <td style="width: 69.6696%;">: '.$customer->created_at.'</td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">Skop Perkhidmatan</td>
                    <td style="width: 69.6696%;">: '.$customer->s_perkhidmatan->nama_skop.' </td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">Lain-lain Skop Perkhidmatan</td>
                    <td style="width: 69.6696%;">: '.$customer->lain_skop.'</td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">Mod Aduan</td>
                    <td style="width: 69.6696%;">: '.$customer->m_aduan->nama_mod.'</td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">Lain-lain Mod Aduan</td>
                    <td style="width: 69.6696%;">: '.$customer->lain_mod.'</td>
                </tr>
                <tr>
                    <td style="width: 30.1802%;">Keutamaan</td>
                    <td style="width: 69.6696%;">: '.$customer->keutamaan->nama_keutamaan.'</td>
                </tr>
            </tbody>
        </table>
        <p><br></p>
        <p>CATATAN ADUAN</p>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 27.4775%;">Lokasi</td>
                    <td style="width: 72.3723%;">: '.$customer->lokasi->nama_lokasi.'</td>
                </tr>
                <tr>
                    <td style="width: 27.4775%;">Lain-lain lokasi</td>
                    <td style="width: 72.3723%;">: '.$customer->lokasi_lain.'</td>
                </tr>
                <tr>
                    <td style="width: 27.4775%;">Aras</td>
                    <td style="width: 72.3723%;">: '.$customer->aras->nama_aras.'</td>
                </tr>
                <tr>
                    <td style="width: 27.4775%;">Nama / No Bilik (Jika ada)</td>
                    <td style="width: 72.3723%;">: '.$customer->nama_no_bilik.'</td>
                </tr>
                <tr>
                    <td style="width: 27.4775%;">Keterangan kerosakan</td>
                    <td style="width: 72.3723%;">: '.$customer->keterangan_rosak.' </td>
                </tr>
                <tr>
                    <td style="width: 27.4775%;">Nama Penerima</td>
                    <td style="width: 72.3723%;">: '.$customer->getPegawaiterima->name.'</td>
                </tr>
                <tr>
                    <td style="width: 27.4775%;">Jawatan</td>
                    <td style="width: 72.3723%;">: '.$customer->getJawatan->nama_jawatan.'</td>
                </tr>
                <tr>
                    <td style="width: 27.4775%;">Tarikh/Masa</td>
                    <td style="width: 72.3723%;">: '.$customer->updated_at.'</td>
                </tr>
            </tbody>
        </table>
            
            ';  
     }
     
     $output .= '</table>';

     
     return $output;
    }

     
     public function show($id)
    {
        
        return view('dynamicpdf.show', ['data_laporrosak' => AsetTakAlih::findOrFail($id)]);
    }

     public function generatePDF()

        {        
            
            $pdf = PDF::loadView('dynamicpdf.laporan-pdf');
            // return $pdf->download('laporan-pdf.pdf');
            return $pdf->stream('laporan_rosak.pdf');
        }
     
    
}