<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTingkat3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tingkat3', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama', 100);
            $table->string('jurusan', 100);
            $table->string('tunggakan', 100);
            $table->string('pembayaran', 100);
            $table->string('sisa_tunggakan', 100);
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
        Schema::dropIfExists('tingkat3');
    }
}
