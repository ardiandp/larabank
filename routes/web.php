<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
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
Route::post('bank-import',[BankController::class, 'fileImport'])->name('bank-import');
Route::get('bank-export',[BankController::class, 'fileExport'])->name('bank-export');

//import data siswa
Route::get('siswa',[SiswaController::class, 'index'])->name('siswa');
Route::post('siswa-import',[SiswaController::class, 'siswaImport'])->name('siswa-import');
Route::get('siswa-export',[SiswaController::class, 'siswaExport'])->name('siswa-export');

//admin
Route::get('admin',[AdminController::class, 'index'])->name('admin');
