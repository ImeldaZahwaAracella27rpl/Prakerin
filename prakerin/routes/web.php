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

Route::resource('user', 'user');
Route::resource('requestfirewall', 'requestfirewall');
Route::resource('periodefirewall', 'periodefirewall');
Route::resource('checkedfirewall', 'checkedfirewall');
Route::resource('doingfirewall', 'doingfirewall');
Route::resource('approvalfirewall', 'approvalfirewall');
Route::resource('project', 'project');

Route::get('/', function () {
    return view('template');
});

Route::get('login', 'Login@index')->name("registrasi.login");
Route::post('login/cek','Login@cek');
Route::get('registrasi', 'Registrasi@index')->name("registrasi.index");
Route::post('/registrasi', 'Registrasi@store')->name("registrasi.store");
