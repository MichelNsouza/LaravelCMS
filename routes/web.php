<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/noticias', [NewsController::class, "index"])->name("news.index");

Route::get('/noticias/novas', [NewsController::class, "create"])->name("news.create");

Route::post('/noticias/novas', [NewsController::class, "store"])->name("news.store");
