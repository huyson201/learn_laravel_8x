<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //
        for($i = 0; $i < 10000; $i++){
            DB::table('trainers')->insert([
                'trainer_name' => 'trainer name ' . $i,
                'trainer_phone' => '0123456' . $i,
                'trainer_email' => 'Thu Duc city ' . $i,
                'company_id' => $i
            ]);
                  
        }
    }
}
