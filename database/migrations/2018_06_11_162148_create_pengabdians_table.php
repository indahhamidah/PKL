<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengabdiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengabdians', function (Blueprint $table) {
            $table->increments('id_pengabdian');
            $table->text('judul_pengabdian');
            $table->text('dosen_pelaksana');
            $table->string('tahun_pengabdian');
            $table->string('jumlah_dana_peng');
            $table->text('sumber_dana_peng');
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
        Schema::dropIfExists('pengabdians');
    }
}
