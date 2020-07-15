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


Route::get('Contatti/index', 'ContactController@index')->name('contacts.index');

Route::get('Contatti/create', 'ContactController@create')->name('contacts.create');

Route::post('Contatti/store', 'ContactController@store')->name('contacts.store');

Route::get('Contatti/show', 'ContactController@show')->name('contacts.show');

Route::get('Contatti/edit', 'ContactController@edit')->name('contacts.edit');

Route::post('Contatti/update', 'ContactController@update')->name('contacts.update');

Route::post('Contatti/delete', 'ContactController@destroy')->name('contacts.destroy');



