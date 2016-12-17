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

use App\User;
use Faker\Factory as Faker;

Route::get('/', 'PagesController@home')->name('home');

Route::get('/all', 'QueryController@eloquentAll')->name('eloquentAll');

Route::get('/get/{gender}', 'QueryController@eloquentGet')->name('eloquentGet');

Route::get('/get', 'QueryController@eloquentGetCustom')->name('eloquentGetCustom');

Route::delete('/delete/{id}', 'QueryController@eloquentDelete')->name('eloquentDelete');

Route::get('/lists', 'QueryController@eloquentLists')->name('eloquentLists');

Route::get('/firstLast', 'QueryController@eloquentFirstLast')->name('eloquentFirstLast');