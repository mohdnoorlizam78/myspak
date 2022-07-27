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
     $customer_data = AsetTakAlih::orderBy('created_at','desc')->get();
     return view('dynamicpdf.index')->with('customer_data', $customer_data);
    }
     
     public function show($id)
    { 
        return view('dynamicpdf.show', ['order' => AsetTakAlih::findOrFail($id)]);
        
    }

    // PDF generate
    public function pdf(Request $request){
        $order=AsetTakAlih::getAllOrder($request->id);
        // return $order;
        //$file_name=$order->order_number.'-'.$order->first_name.'.pdf';
        // return $file_name;
        $pdf=PDF::loadview('dynamicpdf.pdf',compact('order'));
        //return $pdf->download($file_name);
        return $pdf->stream('laporan_rosak_aset_tak_alih.pdf');
    }
        public function generatePDF()

        {        
            
            $pdf = PDF::loadView('dynamicpdf.laporan-pdf');
            // return $pdf->download('laporan-pdf.pdf');
            return $pdf->stream('laporan_rosak.pdf');
        }
     
    
}