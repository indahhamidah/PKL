<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLulusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lulusans', function (Blueprint $table) {
            $table->increments('id_lulusan');
            $table->text('nama');
            $table->string('nim');
            $table->string('tahun_masuk');
            $table->string('tahun_lulus');
            $table->string('total_bulan');
            $table->string('total_tahun');
            $table->decimal('ipk', 5, 2);;
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
        Schema::dropIfExists('lulusans');
    }
}
