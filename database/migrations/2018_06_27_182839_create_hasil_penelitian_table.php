<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilPenelitianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_penelitian', function (Blueprint $table) {
            $table->increments('id_hasilPenelitian');
            $table->text('judul_hasilPenelitian');
            $table->text('nama_dosenPenelitian');
            $table->text('dipublikasi_pada');
            $table->text('tingkat_hasilpenelitian');
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
        Schema::dropIfExists('hasil_penelitian');
    }
}
