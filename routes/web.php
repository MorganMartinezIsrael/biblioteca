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

/*Route::get('/', function () {
    return view('welcome');
});*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');

Route::get('/error', 'ExceptionController@index');

Route::get('/', function () {
    return view('home');
})->name('home')->middleware('verified');


//test register book
Route::get('/registro_libro', function () {
    return view('registro_libro');
});

Route::post('/registrar_libro','RegistroLibroController@register_book');
