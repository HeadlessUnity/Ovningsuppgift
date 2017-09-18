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

Route::resource('bot', 'Botcontroller');

Route::resource('fordon', 'Fordoncontroller',
    ['except' => ['edit', 'update']]);
