<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardBalitaController;
use App\Http\Controllers\DashboardJadwalController;
use App\Http\Controllers\DashboardibuHamilController;
use App\Http\Controllers\DashboardHistoriBalitaController;
use App\Http\Controllers\DashboardHistoriIbuHamilController;
use App\Http\Controllers\LoadController;
use App\Models\Balita;
use Illuminate\Support\Facades\Auth;

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
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/daftar-balita', [LoadController::class, 'getdaftarbalita'])->middleware('auth');
    Route::get('/lihat-balita/{id}', [LoadController::class, 'getviewbalita'])->middleware('auth');
    Route::get('/ubah-balita/{id}', [LoadController::class, 'getubahbalita'])->middleware('auth');
    Route::post('/ubah-balita/{id}', [CrudController::class, 'ubahbalita'])->middleware('auth');

    Route::get('/pemeriksaan-balita', [LoadController::class, 'getpemeriksaanbalita'])->middleware('auth');
    Route::get('/input-pemeriksaan/{id}', [LoadController::class, 'getinputpemeriksaan'])->middleware('auth');
    Route::post('/input-pemeriksaan/{id}', [CrudController::class, 'postinputpemeriksaan'])->middleware('auth');
    Route::get('/lihat-pemeriksaan/{id}', [LoadController::class, 'getlihatpemeriksaan'])->middleware('auth');
    Route::get('/edit-pemeriksaan/{id}', [LoadController::class, 'geteditpemeriksaan'])->middleware('auth');
    Route::post('/edit-pemeriksaan/{id}', [CrudController::class, 'editpemeriksaan'])->middleware('auth');
});

  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

Route::get('/', function(){
    Auth::logout();
    return redirect('/login');
});

Route::resource('/home/balitas', DashboardBalitaController::class)
-> middleware('auth');

Route::resource('/home/jadwals', DashboardJadwalController::class)
-> middleware('auth');

Route::post('/home/jadwals', [CrudController::class, 'insertjadwal'])->middleware('auth');
Route::get('/jadwal', [LoadController::class, 'lihatjadwal'])->middleware('auth');

Route::get('/lihat-pemeriksaan', [LoadController::class, 'lihatpemeriksaanuser'])->middleware('auth');

Route::get('/ibuhamils', [LoadController::class, 'getibuhamils'])->middleware('auth');
Route::post('/ibuhamils', [CrudController::class, 'regibuhamils'])->middleware('auth');




Route::resource('/home/historiibuhamil', DashboardHistoriIbuHamilController::class)
-> middleware('auth');

Route::resource('/home/historibalita', DashboardHistoriBalitaController::class)
-> middleware('auth');

Route::resource('balita', DashboardBalitaController::class)
-> middleware('auth');