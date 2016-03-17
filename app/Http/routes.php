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

// Front Site
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

    // Authentication Routes...
    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::post('login', 'Auth\AuthController@login');
    Route::get('logout', 'Auth\AuthController@logout')->name('logout');
    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');


    // Panel
    Route::group(['prefix'=>'painel', 'middleware'=>'auth'], function() {

        Route::get('/', 'Painel\PainelController@dashboard')->name('dashboard');
        Route::get('dashboard', 'Painel\PainelController@dashboard')->name('dashboard');
        //Sliders
        Route::group(['prefix'=>'sliders'], function() {
            Route::get('/', 'Painel\SlidersController@index')->name('sliders');
            Route::get('create', 'Painel\SlidersController@create')->name('sliders.create');
        });
        //Matriculas
        Route::group(['prefix'=>'matriculas'], function() {
            Route::get('/', 'Painel\MatriculasController@index')->name('matriculas');
            Route::get('create', 'Painel\MatriculasController@create')->name('matriculas.create');
            Route::post('store', 'Painel\MatriculasController@store')->name('matriculas.store');
            Route::get('view/{id}', 'Painel\MatriculasController@view')->name('matriculas.view');
            Route::get('edit/{id}', 'Painel\MatriculasController@edit')->name('matriculas.edit');
            Route::put('update/{id}', 'Painel\MatriculasController@update')->name('matriculas.update');
            Route::get('destroy/{id}', 'Painel\MatriculasController@destroy')->name('matriculas.destroy');
        });
        //Cursos
        Route::group(['prefix'=>'cursos'], function() {
            Route::get('cursos', 'Painel\CursosController@index')->name('cursos');
            Route::post('store', 'Painel\CursosController@store')->name('cursos.store');
            Route::get('destroy/{id}', 'Painel\CursosController@destroy')->name('cursos.destroy');
        });

    });

});
