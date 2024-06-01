<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

Route::get('imagem', function (){
    $imageManger = Image::make('A:\1 - ESTUDOS TI\laravel\LaravelCMS\storage\app\news\2.png');
    $imageManger->resize(300, 200);
    $imageManger->save('A:\1 - ESTUDOS TI\laravel\LaravelCMS\storage\app\news\thumb_2.png');
});

Route::middleware('auth')->group(function (){

    Route::resource("noticias", NewsController::class)
        ->names("news")
        ->parameters(["noticias" => "news"]);

    Route::delete('noticias/{news}', [NewsController::class, 'destroy'])
        ->name('news.destroy')
        ->middleware('can:excluir-noticas');

    Route::resource("categorias", CategoryController::class)
        ->names("category")
        ->parameters(["categorias" => "category"]);
});



Route::get('/', [NewsController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
