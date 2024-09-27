<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeConntroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemberikerjaController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PostConntroller;
use App\Http\Controllers\DocsController;
use Illuminate\Support\Facades\Route;

Route::get('/change/{lang}',[LanguageController::class,'changeLang'])->name('changeLang');

Route::get('/',[HomeConntroller::class,'index'])->name('home');
Route::get('/detail-job/{id}',[PostConntroller::class,'show'])->name('detail-job');
Route::get('/all-jobs',[PostConntroller::class,'all_jobs'])->name('all-jobs');
Route::get('/open-jobs',[HomeConntroller::class,'open_jobs'])->name('open-jobs');
Route::get('/contact-us',[HomeConntroller::class,'contact_us'])->name('contact-us');
Route::post('/front-save-client', [PemberikerjaController::class, 'front_store'])->name('front-save-client');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/docs/{id}', [DocsController::class, 'index'])->name('docs');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pemberi-kerja', [PemberikerjaController::class, 'index'])->name('pemberi-kerja');
    Route::get('/pemberi-kerja/detail/{id}', [PemberikerjaController::class, 'detail'])->name('pemberi-kerja/detail');
    Route::post('/save-client', [PemberikerjaController::class, 'store'])->name('save-client');
    Route::post('/job-posting', [PemberikerjaController::class, 'job_posting'])->name('job-posting');

    Route::get('/post', [PostConntroller::class, 'index'])->name('post');
    Route::get('/post-edit/{id}', [PostConntroller::class, 'edit'])->name('post-edit');
    Route::post('/job-update', [PostConntroller::class, 'update'])->name('job-update');
});

require __DIR__.'/auth.php';
require __DIR__.'/api.php';
