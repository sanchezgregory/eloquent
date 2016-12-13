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

Route::get('/create-user', function () {

    $faker = Faker::create ();

    $user = User::create ([
        'name' =>  $faker->name,
        'email' =>  $faker->email,
        'password' =>   bcrypt('123456'),
        'gender' => $faker->randomElement(['f', 'm']),
        'biography' =>  $faker->text(60),
    ]);

    return $user;

});

Route::get('/read/{id}', function($id) {
    $user = User::find($id);

    return $user;

});

Route::get('/update-user/{id}', function ($id) {


    $faker = Faker::create();
    $user = User::find($id);

    $user->name= $faker->name;
    $user->biography = $faker->text(60);
    $user->save();

    return $user;

});

Route::get('/delete/{id}', function($id){

    $user = User::find($id);
    $user->delete();

    return 'Usuario eliminado';
});
