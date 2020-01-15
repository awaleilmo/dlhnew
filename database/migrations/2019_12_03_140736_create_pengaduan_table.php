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
            $table->string('tempat')->nullable();
            $table->string('userId')->nullable();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string("notelp")->nullable();
            $table->string("alamatkejadian")->nullable();
            $table->string("jeniskegiatan")->nullable();
            $table->string("namakegiatan")->nullable();
            $table->string("waktu")->nullable();
            $table->string("uraiankejadian")->nullable();
            $table->string("dampak")->nullable();
            $table->string("penyelesaian")->nullable();
            $table->string("namainstansi")->nullable();
            $table->string("tgl")->nullable();
            $table->string("foto")->nullable();
            $table->string("lokasi")->nullable();
            $table->string("status")->nullable();
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
