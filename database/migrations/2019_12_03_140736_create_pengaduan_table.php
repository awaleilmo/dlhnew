<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tempat');
            $table->string('nama');
            $table->string('alamat');
            $table->string("notelp");
            $table->string("alamatkejadian");
            $table->string("jeniskegiatan");
            $table->string("namakegiatan");
            $table->string("waktu");
            $table->string("uraiankejadian");
            $table->string("dampak");
            $table->string("penyelesaian");
            $table->string("namainstansi");
            $table->string("tgl");
            $table->string("foto");
            $table->string("lokasi");
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
        Schema::dropIfExists('pengaduan');
    }
}
