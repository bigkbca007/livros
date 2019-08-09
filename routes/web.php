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
})->name('livros.home');

Route::get('/cadastro', 'LivrosController@form')->name('livros.cadastrar');

Route::post('salvar', 'LivrosController@salvar')->name('livros.salvar');