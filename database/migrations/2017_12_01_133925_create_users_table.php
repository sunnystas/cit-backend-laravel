<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('patronymik')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('job_name')->nullable();
            $table->string('job_position')->nullable();
            $table->integer('role_id')->unsigned();
            $table->integer('city_id')->unsigned()->nullable();
            $table->integer('utility_service_id')->unsigned()->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('city_id')->references('id')->on('cities');
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
        Schema::drop('users');
    }
}
