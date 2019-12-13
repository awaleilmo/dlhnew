<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasitpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasitps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("lokasi");
            $table->string("keldesa");
            $table->string("kecamatan");
            $table->string("jenistps");
            $table->string("unit");
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
        Schema::dropIfExists('lokasitps');
    }
}
