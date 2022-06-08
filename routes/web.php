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
    $msg = 'Hello World';
    return view('home', compact('msg'));
})->name('home');
Route::get('/about-me', function () {
    $msg = 'About Me';
    return view('about-me', compact('msg'));
})->name('about-me');
Route::get('/library', function () {
    $msg = 'Library';
    return view('library', compact('msg'));
})->name('library');
Route::get('/blog', function () {
    $msg = 'Blog';
    return view('blog', compact('msg'));
})->name('blog');
Route::get('/contact', function () {
    $msg = 'Contact';
    return view('contact', compact('msg'));
})->name('contact');
