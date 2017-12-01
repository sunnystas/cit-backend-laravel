<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilityServiceEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utility_service_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('utility_service_id')->unsigned();
            
            $table->foreign('utility_service_id')->references('id')->on('utility_services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utility_service_employees');
    }
}
