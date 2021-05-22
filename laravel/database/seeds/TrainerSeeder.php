<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('trainers')->insert([
            'trainer_name' => 'huy son',
            'trainer_email' => 'huyson@gmail.com',
            'trainer_phone' => '123456789',
            'company_id' => 1
        ]);
    }
}
