<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Category::class)->create([
            'name' => 'PHP'
        ]);
        factory(\App\Category::class)->create([
            'name' => 'Html'
        ]);
        factory(\App\Category::class)->create([
            'name' => 'Java'
        ]);
        factory(\App\Category::class)->create([
            'name' => 'Sql'
        ]);
        factory(\App\Category::class)->create([
            'name' => 'Python'
        ]);
    }
}
