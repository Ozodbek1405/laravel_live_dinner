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
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/blog_details', function () {
    return view('pages.blog_details');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/menu', function () {
    return view('pages.menu');
});
Route::get('/reservation', function () {
    return view('pages.reservation');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
