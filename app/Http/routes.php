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

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    /* PAINEL */

    Route::group(['prefix'=>'painel', 'middleware'=>'auth'], function() {

        Route::get('/', 'Painel\PainelController@dashboard')->name('dashboard');
        Route::get('dashboard', 'Painel\PainelController@dashboard')->name('dashboard');

        Route::group(['prefix'=>'sliders'], function() {
            Route::get('/', 'Painel\SlidersController@index')->name('sliders');
            Route::get('create', 'Painel\SlidersController@create')->name('sliders.create');
        });

        Route::group(['prefix'=>'matriculas'], function() {
            Route::get('/', 'Painel\MatriculasController@index')->name('matriculas');
            Route::get('create', 'Painel\MatriculasController@create')->name('matriculas.create');
            Route::get('store', 'Painel\MatriculasController@store')->name('matriculas.store');
        });

        Route::group(['prefix'=>'cursos'], function() {
            Route::get('cursos', 'Painel\CursosController@index')->name('cursos');
        });

    });

    Route::any('/register', function() {
        return redirect('/');
    });

});
