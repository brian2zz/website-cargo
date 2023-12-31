<?php

use App\Http\Controllers\manifestController;
use App\Http\Controllers\resiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//main route
Route::get('/', function () {
    return view('pages.auth.loginPage');
});
//dashboard
Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});

//surat Jalan
Route::get('/surat-jalan', [resiController::class, 'index'])->name('surat_jalan_index');
Route::get('/surat-jalan/tambah', [resiController::class, 'create'])->name('surat_jalan_create');
Route::get('/surat-jalan/edit/{id}', [resiController::class, 'edit'])->name('surat_jalan_edit');
Route::get('/surat-jalan/print/{id}', [resiController::class, 'print'])->name('surat_jalan_print');


//manifest
Route::get('/manifest', [manifestController::class, 'index'])->name('manifest_index');
Route::get('/manifest/detail', [manifestController::class, 'show'])->name('manifest_detail');
Route::get('/manifest/detail/print/{id}', [manifestController::class, 'print'])->name('manifest_detail_print');
Route::get('/manifest/tambah', [manifestController::class, 'create'])->name('manifest_tambah');
