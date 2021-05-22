<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        for($i = 0; $i < 100; $i++){
            DB::table('companies')->insert([
                'company_name' => 'company ' . $i,
                'company_web' => 'web ' . $i,
                'company_address' => 'Thu Duc city ' . $i,
                'company_code' => '012547' . $i,
                'company_phone' => '01230123' .$i,
                'category_id' => rand(1,9)
            ]);
        }

    }
}
