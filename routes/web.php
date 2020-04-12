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

Route::get('/', 'ProdutoController@lista');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')
    ->where('id', '[0-9]+');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
