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
        $this->call(LaratrustSeeder::class);
        $this->call(GradingstatusSeeder::class);
        $this->call(user_seeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(subject_table_seeder::class);
        $this->call(faculty_table_seeder::class);
    }
}
