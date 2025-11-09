<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CappyController;
use App\Http\Controllers\BlogController;

Route::get('/', [PublicController::class, 'welcome'])->name('homepage'); 

Route::get('/about-us', [CappyController::class, 'chiSiamo'])->name('chi.siamo');
Route::get('/cappy/dettaglio/{id}', [CappyController::class, 'dettaglio'])->name('cappy.detail');

Route::get('/servizi', [ServiceController::class, 'servizi'])->name('service');
Route::get('/servizi/dettaglio/{id}', [ServiceController::class, 'dettaglio'])->name('service.detail');

Route::get('/articoli', [BlogController::class, 'articoli'])->name('blog');
Route::get('/articoli/dettaglio/{id}', [BlogController::class, 'dettaglio'])->name('article.detail');
