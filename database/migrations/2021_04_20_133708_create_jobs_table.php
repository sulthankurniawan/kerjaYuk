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
            $table->string('alamat');
            $table->string('posisi_loker');
            $table->string('deskripsi');
            $table->string('tingkat_jabata');
            $table->string('kualifikasi_pendidikan');
            $table->string('kualifikasi_pengalaman');
            $table->string('gaji');
            $table->string('tunjangan');
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
