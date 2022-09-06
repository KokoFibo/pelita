<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelitadata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('daerah_id');
            $table->string('nama');
            $table->string('mandarin')->nullable();
            $table->string('panggilan')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->integer('umur')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('telepon')->nullable();
            $table->string('hp')->nullable();
            $table->date('tanggal_mohon_tao')->nullable();
            $table->string('sd3h')->nullable();
            $table->string('vegetarian')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelitadata');
    }
};
