<?php

use App\Http\Controllers\Api\PemberikerjaController;
use App\Http\Controllers\Api\PencarikerjaController;
use App\Http\Controllers\Api\PostController;

Route::get('/api/data-file', [PemberikerjaController::class, 'index']);
Route::get('/api/soft-delete/{id}', [PemberikerjaController::class, 'soft_delete']);
Route::get('/api/post-delete/{id}', [PostController::class, 'soft_delete']);
Route::get('/api/pelamar-delete/{id}', [PostController::class, 'pelamar_delete']);

Route::post('/api/save-category', [PemberikerjaController::class, 'create_category']);
Route::post('/api/save-pelamar', [PencarikerjaController::class, 'save_pelamar']);
