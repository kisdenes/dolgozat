<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () 
{
    return view('welcome');
});
Route::get('/new-genre', function () 
{
    return view('newgenre')
          ;
});
Route::post('newgenre', [GenreController::class, 'store'])->name('genre.store'); 
