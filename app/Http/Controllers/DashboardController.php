<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetTakAlih;
use DB;
use Gate;
use Symfony\Component\HttpFoundation\Response;
    

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('dashboard_index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_aduanrosak = AsetTakAlih::orderBy('created_at', 'desc')->get();
        
        $data_rosak_selesai = AsetTakAlih::whereHas('status_aduan', function($query) {
            $query->whereNamaStatus('Selesai');
            })->count();
        
        $data_rosak_belum_selesai = AsetTakAlih::whereHas('status_aduan', function($query) {
        $query->whereNamaStatus('Belum selesai');
        })->count();
        
        $data_rosak_dalam_proses = AsetTakAlih::whereHas('status_aduan', function($query) {
                $query->whereNamaStatus('Dalam tindakan');
                })->count();

        // $data_rosak_belum_selesai_papar = AsetTakAlih::whereHas('status_aduan', function($query) {
        // $query->where('status_id', '=', 2); })->get();
        $data_rosak_belum_selesai_papar = AsetTakAlih::whereHas('status_aduan', function($query) {
            $query->where('tindakan_id', '=', null); })->get();

        return view('dashboard.index', compact(
          
            'data_aduanrosak',
            'data_rosak_selesai',
            'data_rosak_belum_selesai',
            'data_rosak_dalam_proses',
            'data_rosak_belum_selesai_papar'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
