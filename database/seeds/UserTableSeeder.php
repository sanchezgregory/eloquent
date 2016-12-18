<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Gregory Sanchez',
            'email' => 'mcgregox@gmail.com',
            'password' => bcrypt('123456')
        ]);

        factory(User::class, 29)->create();
    }
}
