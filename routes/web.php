<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* resursbaserad controller.*/
Route::get('/', function () {
    return view('index');
});

Route::get('bot/{kod?}', 'Employees@index');
//Route::post('/api/v1/kod', 'Employees@store');
Route::post('bot/{kod}', 'Employees@update');
//Route::delete('/api/v1/employees/{id}', 'Employees@destroy');
