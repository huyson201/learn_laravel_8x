<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->insert([
            'company_name' => 'abc',
            'company_web' => 'abc.com',
            'company_address' => 'Thu Duc TDC',
            'company_code' => '12457854',
            'company_phone' => '999999999'
        ]);
    }
}
