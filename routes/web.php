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
    return view('welcome');
});

// Route::resource('produtos','ProdutosController');
Route::prefix('produtos')->group(function () {

    Route::get('/', 'ProdutosController@index')->name('produtos.index');
    Route::post('/', 'ProdutosController@store')->name('produtos.store');
    Route::get('/create', 'ProdutosController@create')->name('produtos.create');
    Route::get('/{produto}', 'ProdutosController@show')->name('produtos.show');
    Route::put('/{produto}', 'ProdutosController@update')->name('produtos.update');
    Route::get('/{produto}/edit', 'ProdutosController@edit')->name('produtos.edit');
    Route::delete('/{produto}', 'ProdutosController@destroy')->name('produtos.destroy');

});

Route::prefix('categorias')->group(function () {

    Route::get('/', 'CategoriasController@index')->name('categorias.index');
    Route::post('/', 'CategoriasController@store')->name('categorias.store');
    Route::get('/create', 'CategoriasController@create')->name('categorias.create');
    Route::get('/{categoria}', 'CategoriasController@show')->name('categorias.show');
    Route::put('/{categoria}', 'CategoriasController@update')->name('categorias.update');
    Route::get('/{categoria}/edit', 'CategoriasController@edit')->name('categorias.edit');
    Route::delete('/{categoria}', 'CategoriasController@destroy')->name('categorias.destroy');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
