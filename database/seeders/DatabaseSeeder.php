<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TagsSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategoriesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->class(TagsSeeder::class);
    }
}
