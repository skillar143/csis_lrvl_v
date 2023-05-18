<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $program = new Program(["description"=> "Bachelor of Science in Psychology", "rle_status" => "0"]); $program->save();
        $program = new Program(["description"=> "Bachelor of Science in Elementary Education", "rle_status" => "0"]); $program->save();
        $program = new Program(["description"=> "Bachelor of Science in Nursing", "rle_status" => "1"]); $program->save();

    }
}
