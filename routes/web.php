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
Route::post('new-genre', [GenreController::class, 'store'])->name('mufaj.store'); 
