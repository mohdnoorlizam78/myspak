<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AsetTakAlihController;
use App\Http\Controllers\DynamicPDFController;
use App\Http\Controllers\SiasatanPenyelenggaraanController;
use App\Http\Controllers\GambarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index']);

//Route::resource('asettakalih', AsetTakAlihController::class);
Route::get('/asettakalih', [AsetTakAlihController::class, 'index']);
Route::get('/asettakalih/periode', [AsetTakAlihController::class, 'periode']);
Route::get('/asettakalih/add', [AsetTakAlihController::class, 'add']);
Route::post('/asettakalih/add',[AsetTakAlihController::class, 'store']);
Route::get('/asettakalih/show/{id}',[AsetTakAlihController::class, 'show']);
Route::get('/asettakalih/paparan/{id}',[AsetTakAlihController::class, 'paparan']);
Route::get('/asettakalih/edit/{id}',[AsetTakAlihController::class, 'edit']);
Route::put('/asettakalih/update/{id}',[AsetTakAlihController::class, 'update']);
Route::get('/asettakalih/edittindakan/{id}',[AsetTakAlihController::class, 'edittindakan']);
Route::put('/asettakalih/updatetindakan/{id}',[AsetTakAlihController::class, 'updatetindakan']);
Route::get('/asettakalih/delete/{id}',[AsetTakAlihController::class, 'delete']);
Route::get('/asettakalih/pdf/{id}', [AsetTakAlihController::class, 'pdf']);
Route::get('/asettakalih/tindakan/', [AsetTakAlihController::class, 'tindakanindex']);
Route::get('/asettakalih/tindakan/periodetindakan', [AsetTakAlihController::class, 'periodetindakan']);
Route::get('/asettakalih/tindakan/tindakanpdf/{id}', [AsetTakAlihController::class, 'tindakanpdf']);
Route::get('/asettakalih/tindakan/{id}', [AsetTakAlihController::class, 'tindakan']);
Route::get('/asettakalih/tindakan/edittindakan/{id}', [AsetTakAlihController::class, 'edittindakan']);

Route::get('/siasatan_penyelenggaraan/add', [SiasatanPenyelenggaraanController::class, 'add']);
Route::post('/siasatan_penyelenggaraan/add',[SiasatanPenyelenggaraanController::class, 'store']);
Route::get('/siasatan_penyelenggaraan/tindakan_siasat/{id}', [SiasatanPenyelenggaraanController::class, 'edit']);
Route::put('/siasatan_penyelenggaraan/update/{id}',[SiasatanPenyelenggaraanController::class, 'update']);


//testing pdf
Route::get('/dynamicpdf', [DynamicPDFController::class, 'index']);
Route::get('/dynamicpdf/show/{id}', [DynamicPDFController::class, 'show']);
Route::get('/dynamicpdf/pdf/{id}', [DynamicPDFController::class, 'pdf']);
Route::get('/dynamicpdf/laporan-pdf', [DynamicPDFController::class, 'generatePDF']);
Route::get('/dynamicpdf/pdf/', [DynamicPDFController::class, 'pdf']);

// Route::get('/dynamicpdf/show/{id}',function(){
//     Route::resource('/dynamicpdf', DynamicPDFController::class);
//     $pdf = PDF::loadView('dynamicpdf.laporan-pdf');
//     return $pdf->stream('laporan_rosak.pdf');
     
// });


Route::get('/posts', [PostsController::class, 'index']);
Route::post('/posts', [PostsController::class, 'store']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
Route::put('/posts/{post}', [PostsController::class, 'update']);
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);

Route::group(['middleware' => ['auth']], function() {
    
    //modul permission      
    Route::get('permissions', [PermissionController::class, 'index']);
    Route::get('permissions/add',[PermissionController::class, 'add']);
    Route::post('permissions/add',[PermissionController::class, 'store']);
    Route::get('permissions/show/{id}',[PermissionController::class, 'show']);
    Route::get('permissions/edit/{id}',[PermissionController::class, 'edit']);
    Route::put('permissions/update/{id}',[PermissionController::class, 'update']);
    Route::get('permissions/delete/{id}',[PermissionController::class, 'delete']);


    Route::resource('roles', RoleController::class);
    Route::post('roles/create', [RoleController::class, 'create']);
    Route::post('roles/store', [RoleController::class, 'store']);
    Route::get('roles/destroy/{id}', [RoleController::class, 'destroy']);
    Route::get('roles/show/{id}', [RoleController::class, 'show']);
    Route::get('roles/edit/{id}', [RoleController::class, 'edit']);
    Route::post('roles/update/{id}', [RoleController::class, 'update']);
     
    Route::resource('users', UserController::class);
    //modul users      
    
    //Route::get('users', [UserController::class,'index']);
    Route::post('users/create', [UserController::class, 'create']);
    Route::post('users/store', [UserController::class, 'store']);
    Route::get('users/destroy/{id}', [UserController::class, 'destroy']);
    Route::get('users/show/{id}', [UserController::class, 'show']);
    Route::get('users/edit/{id}', [UserController::class, 'edit']);
    Route::post('users/update/{id}', [UserController::class, 'update']);
    Route::get('users/editprofile/{id}',[UserController::class, 'editprofile']);
    Route::post('users/updatePassword/{id}', [UserController::class, 'updatePassword']);

    Route::resource('products', ProductController::class);
});

Route::get('keluar',function(){
    \Auth::logout();
    return view('welcome');
});

//modul album

Route::resource('gambar', GambarController::class);
Route::post('gambar/create', [GambarController::class, 'create']);
Route::post('gambar/store', [GambarController::class, 'store']);
Route::get('gambar/destroy/{id}', [GambarController::class, 'destroy']);
Route::get('gambar/show/{id}', [GambarController::class, 'show']);
Route::get('gambar/edit/{id}', [GambarController::class, 'edit']);
Route::post('gambar/update/{id}', [GambarController::class, 'update']);
 