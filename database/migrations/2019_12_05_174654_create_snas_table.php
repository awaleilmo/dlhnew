<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("namasekolah");
            $table->string("alamat");
            $table->string("sk");
            $table->string("kepalasekolah");
            $table->string("tahun");
            $table->string('kecamatan');
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
        Schema::dropIfExists('snas');
    }
}
