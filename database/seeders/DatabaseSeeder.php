<?php

namespace Database\Seeders;

use App\Models\Blue_1;
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
       Blue_1::factory(10)->create();
    }
}
