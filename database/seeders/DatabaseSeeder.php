<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PublisherSeeder::class,
            AuthorSeeder::class,
            CategorySeeder::class,
            BookSeeder::class,
        ]);
    }
}
