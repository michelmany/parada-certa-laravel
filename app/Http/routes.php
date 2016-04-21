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
Route::get('/', 'Front\FrontController@index')->name('home');
Route::get('contato', 'Front\FrontController@contato')->name('contato');
Route::get('simulado', 'Front\FrontController@simulado')->name('simulado.online');
Route::get('quemsomos', 'Front\FrontController@quemsomos')->name('quemsomos');
Route::get('veiculos', 'Front\FrontController@veiculos')->name('veiculos');

Route::group(['middleware' => 'web'], function () {
    // Form Matrícula front site
    Route::get('matricula-online', 'Front\FrontController@matricula')->name('matricula.online');
    Route::post('matricula-online/store', 'Painel\MatriculasController@store')->name('matriculassite.store');

});

Route::group(['prefix'=>'servicos'], function() {

    Route::get('realinfrator', 'Front\PageServicosController@realinfrator')->name('realinfrator');

    Route::group(['prefix'=>'categoria-a-moto'], function() {
        Route::get('habilitacao', 'Front\PageServicosController@habilitacaoa')->name('habilitacao.a');
        Route::get('inclusao', 'Front\PageServicosController@inclusaoa')->name('inclusao.a');
        Route::get('aulapratica', 'Front\PageServicosController@aulapraticaa')->name('aulapratica.a');
        Route::get('reciclagemhabilitados', 'Front\PageServicosController@reciclagemhabilitadosa')->name('reciclagemhabilitado.a');
    });
    Route::group(['prefix'=>'categoria-b-carro'], function() {
        Route::get('habilitacao', 'Front\PageServicosController@habilitacaob')->name('habilitacao.b');
        Route::get('inclusao', 'Front\PageServicosController@inclusaob')->name('inclusao.b');
        Route::get('aulapratica', 'Front\PageServicosController@aulapraticab')->name('aulapratica.b');
        Route::get('reciclagemhabilitados', 'Front\PageServicosController@reciclagemhabilitadob')->name('reciclagemhabilitado.b');
    });
    Route::group(['prefix'=>'categoria-ab-carro'], function() {
        Route::get('habilitacao', 'Front\PageServicosController@habilitacaoab')->name('habilitacao.ab');
        Route::get('inclusao', 'Front\PageServicosController@inclusaoab')->name('inclusao.ab');
        Route::get('aulapratica', 'Front\PageServicosController@aulapraticaab')->name('aulapratica.ab');
        Route::get('reciclagemhabilitados', 'Front\PageServicosController@reciclagemhabilitadosab')->name('reciclagemhabilitado.ab');
    });

    Route::get('tabelaprecos', 'Front\PageServicosController@tabelaprecos')->name('tabela.precos');
    Route::get('habilitacao-passo-a-passo', 'Front\PageServicosController@passoapasso')->name('passoapasso');

});



Route::get('matricula-procedimentos', 'Front\FrontController@procedimentos')->name('procedimentos');


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
            Route::post('upload', 'Painel\SlidersController@upload')->name('sliders.upload');
            Route::get('edit/{id}', 'Painel\SlidersController@edit')->name('sliders.edit');
            Route::post('update/{id}', 'Painel\SlidersController@update')->name('sliders.update');
            Route::post('order', 'Painel\SlidersController@order')->name('sliders.order');
            Route::get('destroy/{id}', 'Painel\SlidersController@destroy')->name('sliders.destroy');
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


// Route::get('img/{path}', function(League\Glide\Server $server, Illuminate\Http\Request $request) {
//     $server->outputImage($request);
// })->name('img')->where('path', '.+');