<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::group([
    'middleware' => 'roles',
    'roles' => ['Admin', 'Moderator']
], function() {
    Route::get('pages', [
        'uses' => 'PagesController@index',
        'as' => 'pages.index'
    ]);
    Route::get('pages/create', [
        'uses' => 'PagesController@create',
        'as' => 'pages.create' 
    ]);
    Route::post('pages/store', [
        'uses' => 'PagesController@store',
        'as' => 'pages.store'
    ]);
    Route::get('pages/edit/{page}', [
        'uses' => 'PagesController@edit',
        'as' => 'pages.edit'
    ]);
    Route::put('pages/{page}', [
        'uses' => 'PagesController@update',
        'as' => 'pages.update'
    ]);
    Route::delete('pages/{page}', [
        'uses' => 'PagesController@destroy',
        'as' => 'pages.delete'
    ]);

    
    
});
Auth::routes();
Route::get('/home', 'HomeController@index');