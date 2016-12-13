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

Route::get('/create-user', function () {

    $user = User::create ([
        'name' =>  'mkariana Guzman',
        'email' =>  'marianita.a.g@gmail.com',
        'password' =>   bcrypt('123456'),
        'gender' => 'f',
        'biography' =>  'Propietaria'
    ]);

    return 'Usuario guardado';

});

Route::get('/update-user', function () {

    $user = User::find(1);

    $user->name='Gregory Sanchez';
    $user->biography = 'Profesor BD';

    $user->save();

    return 'Usuario actualizado';

});
