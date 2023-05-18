<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grading_status;



class GradingstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gstat = new Grading_status(["status"=> "0", "term" => "0"]); $gstat->save();

    }
}
