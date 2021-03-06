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


Auth::routes(['register' => false]);

Route::get('/', function(){
    return view('auth/login');
});

Route::group(['middleware' => ['auth']], function () {

        Route::namespace('Admin')->group(function (){

        Route::group(['prefix' => 'users'], function() {
        	Route::get('/', 'UserController@index')->name('view.users.index');
        	Route::get('/create-user', 'UserController@create')->name('view.users.create');
            Route::get('/edit/{id}', 'UserController@edit')->name('users.edit');
            Route::get('/show/{id}', 'UserController@show')->name('users.show');
            Route::post('/retrieve/data', 'UserController@serverProcess')->name('server.process.data');
        	Route::post('/', 'UserController@store')->name('users.store');
            Route::delete('/delete/{id}','UserController@destroy')->name('users.delete');

        });

        Route::resource('/dashboard', 'DashboardController');
    });

    #xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx







});


