<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
       
        for($i = 0; $i < 1000; $i++){
             DB::table('trainers')->insert([
                'trainer_name' => 'HuySon',
                'trainer_email' =>  'huyson@gmail.com', 
                'trainer_phone' => '1234567',
                'company_id' => 1      
             ]);
        }
    }
}
