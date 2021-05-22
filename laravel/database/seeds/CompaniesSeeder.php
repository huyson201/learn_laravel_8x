<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CompaniesSeeder extends Seeder
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
             DB::table('companies')->insert([
           'company_name' => 'huy son',
           'company_web' => 'abc.com',
           'company_address' => 'Thu Duc City',
           'company_code' => '1234567',
           'company_phone' => '1234567'
        ]);
             
        }
    }
}
