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

Route::get('/', 'FrontController@home')->name('home');

Route::get('/ChiSiamo', 'FrontController@chisiamo')->name('chi');

Route::get('/Servizi', 'FrontController@servizi')->name('servizi');

Route::get('Servizi/{name}', 'FrontController@details')->name('details');

Route::get('/Contatti', 'FrontController@contacts')->name('contacts');

Route::post('/Contatti/submit', 'FrontController@submit')->name('contacts-submit');

Route::get('/Grazie', 'FrontController@thankyou')->name('thank-you');


