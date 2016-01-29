<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/* PAINEL */
Route::get('/painel', 'Painel\PainelController@dashboard');
Route::get('/painel/dashboard', 'Painel\PainelController@dashboard')->name('dashboard');

Route::get('/painel/sliders', 'Painel\SlidersController@index')->name('sliders');
Route::get('/painel/sliders/create', 'Painel\SlidersController@create')->name('sliders.create');

Route::get('/painel/matriculas', 'Painel\MatriculasController@index')->name('matriculas');
Route::get('/painel/matriculas/create', 'Painel\MatriculasController@create')->name('matriculas.create');
Route::get('/painel/matriculas/store', 'Painel\MatriculasController@store')->name('matriculas.store');

Route::get('/painel/cursos', 'Painel\CursosController@index')->name('cursos');


/* FRONT */
Route::get('/', 'Front\FrontController@index');
Route::get('/contato', 'Front\FrontController@contato')->name('contato');
Route::get('/simulado', 'Front\FrontController@simulado')->name('simulado.online');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
