<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('area')->nullable();
            $table->string('location_link')->nullable();
            $table->string('career')->nullable();
            $table->string('type')->nullable();
            $table->string('min_salary')->nullable();
            $table->string('max_salary')->nullable();
            $table->string('workhour_start')->nullable();
            $table->string('workhour_end')->nullable();
            $table->string('workday_start')->nullable();
            $table->string('workday_end')->nullable();
            $table->string('job_state')->nullable();
            $table->string('education')->nullable();
            $table->json('majors')->nullable();
            $table->string('experience')->nullable();
            $table->text('responsibility')->nullable();
            $table->text('skill')->nullable();
            $table->string('submission')->nullable();
            $table->text('other')->nullable();
            $table->date('expiration')->nullable();
            $table->string('display')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}


