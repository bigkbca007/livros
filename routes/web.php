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

Route::get('/', 'LivrosController@listar')->name('livros.home');

Route::get('/cadastro', 'LivrosController@form')->name('livros.cadastrar');

//Route::post('salvar', 'LivrosController@salvar')->name('livros.salvar');

Route::post('/salvar', function(App\Http\Requests\CreateLivroRequest $request){
	$controller = app()->make('App\Http\Controllers\LivrosController');
	return $controller->callAction('salvar', [$request]);
})->name('livros.salvar');

Route::get('/editar/{cod_livro}','LivrosController@editar');