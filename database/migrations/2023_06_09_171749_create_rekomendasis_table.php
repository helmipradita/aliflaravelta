<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomendasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekomendasis', function (Blueprint $table) {
            $table->id();
            $table->string('rasa_sambal');
            $table->string('tempat_makan');
            $table->string('harga');
            $table->string('porsi_makan');
            $table->string('parkir');
            $table->string('warna_sambal');
            $table->string('penjual');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('jam_buka');
            $table->string('jam_tutup');
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
        Schema::dropIfExists('rekomendasis');
    }
}
