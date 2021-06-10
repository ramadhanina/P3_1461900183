<?php

use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\gurucontroller;
use App\Http\Controllers\kelascontroller;
use Illuminate\Support\Facades\Route;

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

route::resource('siswa', siswacontroller::class);
route::resource('guru', gurucontroller::class);
route::get('/kelas', [kelascontroller::class,'index']);