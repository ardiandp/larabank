<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\TerapistController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\Customer;
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

// import export user 
Route::get('file-import-export', [UserController::class, 'fileImportExport']);
Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
Route::get('file-export',  [UserController::class, 'fileExport'])->name('file-export');

//import dan export bank
Route::get('bank', [BankController::class, 'index'])->name('bank');
Route::get('bank-upload',[BankController::class, 'upload'])->name('bank-upload');
Route::post('bank-import',[BankController::class, 'fileImport'])->name('bank-import');
Route::get('bank-export',[BankController::class, 'fileExport'])->name('bank-export');

//import data siswa
Route::get('siswa',[SiswaController::class, 'index'])->name('siswa');
Route::post('siswa-import',[SiswaController::class, 'siswaImport'])->name('siswa-import');
Route::get('siswa-export',[SiswaController::class, 'siswaExport'])->name('siswa-export');

//admin
Route::get('admin',[AdminController::class, 'index'])->name('admin');

//dashboard
Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

//akun
Route::get('akun',[AkunController::class, 'index'])->name('akun');
Route::post('akun-store',[AkunController::class, 'store'])->name('akun-store');
Route::get('akun-destroy/{id}',[AkunController::class, 'destroy'])->name('akun-destroy/{id}');
Route::post('akun-edit',[AkunController::class, 'edit'])->name('akun-edit');

//bank serverside
Route::get('bank_server_side', [BankController::class, 'bank_server_side'])->name('bank_server_side');
Route::get('bank_ssd', [BankController::class, 'bank_ssd'])->name('bank_ssd');

// No rekening 
Route::get('rekening',[RekeningController::class, 'index'])->name('rekening');
// Customer
Route::get('customer',[TerapistController::class, 'index'])->name('customer');


// Terapist
Route::get('terapist',[TerapistController::class, 'index'])->name('terapist');
