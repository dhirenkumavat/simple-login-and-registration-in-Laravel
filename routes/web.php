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


Route::get('/', function()
{
    return View::make('home. index');
});
	Route::get('/login', 'user@login');
	Route::get('/Sign', 'user@Sign');
	Route::post('/loginsub', 'user@loginsub');
	Route::post('/sinsub', 'user@sinsub');