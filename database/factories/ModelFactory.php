<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('123456'),
        'gender' => $faker->randomElement(['f', 'm']),
        'biography' => $faker->text(rand(50,200)),
        'remember_token' => $faker->randomElement([null,str_random(10)])
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->randomElement(['PHP','HTML','JAVASCRIPT','PYTHON','CSS'])
    ];
});

$factory->define(App\Book::class, function (Faker\Generator $faker) {

    return [
        'category_id' => $faker->randomElement([1,2,3,4]),
        'title' => $faker->sentence(10,20),
        'description' => $faker->text(rand(20,50)),
        'status' => $faker->randomElement(['Publico','Borrador'])
    ];
});

$factory->define(App\BookUser::class, function (Faker\Generator $faker) {

    return [
        'book_id' => rand(1,30),
        'user_id' => rand(1,30)
    ];
});