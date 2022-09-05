<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\StudentsLogin;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\SmartPunct\DashParser;

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

Route::get('/', [StudentsLogin::class, 'index']);
Route::post('/insertLogin/student', [StudentsLogin::class, 'cekLogin']);


// loginRouteadmin
Route::get('/login', [LoginController::class, 'index']);
Route::post('/insertLogin', [LoginController::class, 'cekLogin']);
Route::post('/logout', [LoginController::class, 'cekLogout']);

// dashboardRoute
Route::get('/dashboard', [DashboardController::class, 'index']);

// MahasiswaRoute
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/add', [MahasiswaController::class, 'viewAddMhs']);
Route::post('/mahasiswa/add/save', [MahasiswaController::class, 'addMhs']);
Route::get('/mahasiswa/ubah/{nim}', [MahasiswaController::class, 'viewEditMhs']);
Route::post('/mahasiswa/ubah/save', [MahasiswaController::class, 'editMhs']);
Route::get('/mahasiswa/hapus/{nim}', [MahasiswaController::class, 'hapusMhs']);

//MatkulRoute
Route::get('/matkul', [MatakuliahController::class, 'index']);
Route::get('/matkul/add', [MatakuliahController::class, 'viewAddMatkul']);
Route::post('/matkul/add/save', [MatakuliahController::class, 'addMatkul']);
Route::get('/matkul/ubah/{kode_matkul}', [MatakuliahController::class, 'viewUbahMhs']);
Route::post('/matkul/ubah/save', [MatakuliahController::class, 'editMatkul']);
Route::get('/matkul/hapus/{kode_matkul}', [MatakuliahController::class, 'hapusMatkul']);

Route::get('/krs', [KrsController::class, 'index']);
Route::get('/krs/add', [KrsController::class, 'viewAddKrs']);
Route::post('/krs/add/save', [KrsController::class, 'addKrs']);
Route::get('/matkul/ubah/{kode_matkul}', [MatakuliahController::class, 'viewUbahMhs']);
Route::post('/matkul/ubah/save', [MatakuliahController::class, 'editMatkul']);
Route::get('/matkul/hapus/{kode_matkul}', [MatakuliahController::class, 'hapusMatkul']);
