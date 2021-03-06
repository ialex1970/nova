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

Route::get('/', 'Maincontroller@main');
Route::get('/about', 'Maincontroller@about');
Route::get('/services', 'Maincontroller@services');
Route::get('/blog', 'Maincontroller@blog');
Route::get('/blog/{id}', 'Maincontroller@single');
Route::get('/contact', 'Maincontroller@contact');
Route::get('/portfolio', 'Maincontroller@portfolio');


Route::auth();

Route::get('/home', 'HomeController@index');
