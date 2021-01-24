<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(AdminTabelSeeder::class);
        //$this->call(EmployeesTableSeeder::class);
        //\App\Models\Employee::factory(10)->create;
    }
}
