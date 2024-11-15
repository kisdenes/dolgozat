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
Route::get('/new-book', function () 
{
    return view('newbook')
          ;
});
Route::get('/books', function () 
{
    return view('books')
          ;
});
Route::get('/back', function () 
{
    return view('back')
          ;
});
Route::get('/rentals', function () 
{
    return view('rentals')
          ;
});