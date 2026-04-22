<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', [ProdukController::class, 'index']);
Route::get('/tambah', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);