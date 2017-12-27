<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('notify_about_changes')->nullable();
            $table->integer('home_city_id')->unsigned();
            $table->integer('home_street_id')->unsigned();
            $table->string('home_building_no');
            $table->string('home_flat_no')->nullable();
            $table->integer('issue_city_id')->unsigned();
            $table->integer('issue_street_id')->unsigned();
            $table->string('issue_building_no');
            $table->string('issue_flat_no')->nullable();
            $table->integer('category_id')->unsigned();
            $table->integer('utility_service_id')->unsigned();
            $table->integer('utility_service_employee_id')->unsigned();
            $table->integer('priority_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->text('short_notes')->nullable();
            $table->text('notes')->nullable();
            $table->json('pictures')->nullable();
            $table->date('expected_end_date')->nullable();
            $table->boolean('is_paid')->nullable();
            $table->boolean('is_on_control')->nullable();
            $table->text('extra_employees')->nullable();
            $table->timestamps();

            $table->foreign('home_street_id')->references('id')->on('streets');
            $table->foreign('issue_street_id')->references('id')->on('streets');
            $table->foreign('category_id')->references('id')->on('issue_categories');
            $table->foreign('utility_service_id')->references('id')->on('utility_services');
            $table->foreign('utility_service_employee_id')->references('id')->on('utility_service_employees');
            $table->foreign('priority_id')->references('id')->on('issue_priorities');
            $table->foreign('status_id')->references('id')->on('issue_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
