<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('jurusan', 100)->nullable();
            $table->string('sumbangan', 100)->nullable();
            $table->string('pembayaran_satu', 100)->nullable();
            $table->string('sisa_sumbangan', 100)->nullable();
            $table->date('tanggall')->nullable();
            $table->string('pembayaran_dua', 100)->nullable();
            $table->string('sisa_sumbanganDua', 100)->nullable();
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
        Schema::dropIfExists('siswa');
    }
}

// $table->date('tanggal')->nullable();
