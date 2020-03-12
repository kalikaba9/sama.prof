<?php

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/school', function () {
    return view('school');
});

Route::get('/teacher', function () {
    return view('teacher');
});
Route::get('/teacher-single', function () {
    return view('teacher-single');
});
Route::get('/event', function () {
    return view('event');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/connexion', function () {
    return view('connexion');
});
Route::get('/inscription', function () {
    return view('inscription');
});
