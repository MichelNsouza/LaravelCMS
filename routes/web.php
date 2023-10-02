<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::resource("noticias", NewsController::class)
    ->names("news")
    ->parameters(["noticias" => "news"]);
