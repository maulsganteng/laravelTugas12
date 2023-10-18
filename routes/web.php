<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CastController;


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

Route::get('/', [HomeController::class, 'home']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/welcome', [AuthController::class, 'welcome']);
Route::post('/kirim', [HomeController::class, 'kirim']);


Route::get('/table', function () {
    return view('halaman.table');
});
Route::get('data-table', function () {
    return view('halaman.datatable');
});

// Crud cast



// Create 
// from tambahan cast
Route::get('/cast/create', [CastController::class, 'create']);
// unutk kirimsata ke database atau tambah dta ke database
Route::post('/cast', [CastController::class, 'store']);

// read
// tampil data
Route::get('/cast', [CastController::class, 'index']);
// detail cast berdasarkan id
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

//update
//from update cast
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
//update data ke database berdasarkanid
Route::put('/cast/{cast_id}/', [CastController::class, 'update']);

//delete
Route::delete('/cast/{cast_id}/', [CastController::class, 'destroy']);

