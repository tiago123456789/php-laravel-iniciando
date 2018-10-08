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


/**
 * Rotas de page.
 */

Route::prefix("admin")
    ->middleware(["auth"])
    ->group(function() {
        Route::get('/page', "Admin\PageController@index")->name("page");
        Route::get('/page/new', "Admin\PageController@new")->name("page.nova");
        Route::post('/page/new', "Admin\PageController@create")->name("page.nova");
        Route::get('/page/{id}/show', "Admin\PageController@show")->name("page.show");
        Route::get('/page/{id}/delete', "Admin\PageController@remove")->name("page.delete");
        Route::get('/page/{id}/update', "Admin\PageController@edit")->name("page.edit");
        Route::post('/page/{id}/update', "Admin\PageController@update")->name("page.edit");
    });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
