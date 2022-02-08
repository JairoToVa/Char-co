<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/nosotros', function () {
    return view('about');
})->name('about');

Route::get('/servicios', function () {
    return view('services');
})->name('services');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

Route::get('/portafolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/preguntas-frecuentes', function () {
    return view('faq');
})->name('faq');

