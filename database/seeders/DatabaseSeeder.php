<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(3)->create();
        Book::factory(11)->create();
        Detail::factory(11)->create();
    }
}
