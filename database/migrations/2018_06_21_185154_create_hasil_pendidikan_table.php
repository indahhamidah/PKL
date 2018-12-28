<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_pendidikan', function (Blueprint $table) {
             $table->increments('id_hasilPendidikan');
            $table->text('jenis_hasil');
            $table->text('judul_hasilPendidikan');
            $table->text('nama_dosen');
            $table->text('perolehan_haki');
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
        Schema::dropIfExists('hasil_pendidikan');
    }
}
