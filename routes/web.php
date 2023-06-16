<?php

use App\Http\Controllers\ProductController;
use App\Models\product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// route index
route::get('/index', [ProductController::class, 'Index'])->name('index');
route::get('/add', [ProductController::class, 'Tambah'])->name('add');
route::get('/edit/{id}', [ProductController::class, 'Edit'])->name('edit');

//function
Route::POST('/simpan',[ProductController::class, 'Simpan'])->name('simpan');
Route::post('/ubah',[ProductController::class, 'Ubah'])->name('ubah');
Route::get('/hapus/{id}',[ProductController::class, 'Hapus'])->name('hapus');

