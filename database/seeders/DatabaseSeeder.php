<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
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
        User::factory()->times(1)->create([
            "name" => "HardSoftDay",
            "email" => "web@hardsoftday.com",
            "password" => bcrypt("password")
        ]);

        Project::factory()->times(40)->create();

    }
}
