<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
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

Route::get('/level', [LevelController::class, 'index']);

//route untuk kategori
Route::prefix('/kategori')->group(function () {
    Route::get('/', [KategoriController::class, 'index']);
});
Route::get('/kategori', [UsersController::class, 'store']);
Route::get('/kategori/create', [UsersController::class, 'create']);

Route::get('/user', [UsersController::class, 'index']);
Route::get('/user/tambah', [UsersController::class, 'tambah']);
Route::get('/user/tambah_simpan', [UsersController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UsersController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UsersController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UsersController::class, 'hapus']);
