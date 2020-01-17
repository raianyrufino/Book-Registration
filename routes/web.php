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

Route::get('/livros', 'BooksController@index')->name('listar_livros');
Route::get('/livros/form/{id?}', 'BooksController@create')->name('form_criar_livro');
Route::post('/livros/adicionar', 'BooksController@store')->name('salvar_livro');
Route::put('/livros/atualizar', 'BooksController@update');
Route::get('/livros/ler', 'BooksController@read');
Route::delete('/livros/{id}', 'BooksController@delete');