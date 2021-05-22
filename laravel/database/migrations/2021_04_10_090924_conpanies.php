<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Conpanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('companies', function(BluePrint $table){
            $table->increments('company_id');
            $table->string('company_name',50);
            $table->string('company_web',255);
            $table->string('company_address',500);
            $table->string('company_code',55);
            $table->string('company_phone',55);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('companies');
    }
}
