<?php

use App\BookUser;
use App\User;
use Illuminate\Database\Seeder;

class BookUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=40; $i++) {
            $x = rand(1,30);
            $y = rand(1,30);
            $user = User::find($x);
            $user->books()->attach($y);
        }
    }
}
