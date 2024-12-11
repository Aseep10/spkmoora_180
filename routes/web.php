<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\MatriksKeputusanController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('layouts.ready.main');
});
Route::get('/data_alternatif', function () {
    return view('data_alternatif');
});
Route::get('/data_kriteria', function () {
    return view('data_kriteria');
});
Route::get('/matriks_keputusan', function () {
    return view('matriks_keputusan');
});

Route::get('/nilai_optimasi', function () {
    return view('nilai_optimasi');
});
Route::get('/perankingan', function () {
    return view('perankingan');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get(
    '/data_alternatif',
    [AlternatifController::class, 'index']
);
Route::get(
    '/data_kriteria',
    [KriteriaController::class, 'index']
);
Route::get(
    '/matriks_keputusan',
    [MatriksKeputusanController::class, 'index']
);

Route::resource('alternatifs', AlternatifController::class);
Route::resource('kriterias', KriteriaController::class);
Route::resource('matriks_keputusan', MatriksKeputusanController::class);

Route::get(
    '/matriks_normalisasi',
    [DataController::class, 'normalisasi']
)->name('matriks_normalisasi');

Route::get(
    '/nilai_optimasi',
    [DataController::class, 'nilai_optimasi']
)->name('nilai_optimasi');
Route::get(
    '/perankingan',
    [DataController::class, 'perankingan']
)->name('perankingan');

