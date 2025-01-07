<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/quickview', function(){
    return view('quick_vew');
})->name('quickview');

Route::get('/detalhes', function(){
    return view('detalhes_solucoes');
})->name('detalhes_solucoes');

Route::get('/solucoes', function(){
    return view('solucoes');
})->name('solucoes');

Route::fallback(function(){
    return response()->view('error404');
});