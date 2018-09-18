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

Route::resource('chamadas', 'Admin\ChamadaController');

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin/configuracoes')->group(function () {
	Route::name('configuracoes.')->group(function () {
	    Route::get('', 'Admin\ConfiguracoesController@edit')->name('edit');
    	Route::put('', 'Admin\ConfiguracoesController@update')->name('update');
	});
});
