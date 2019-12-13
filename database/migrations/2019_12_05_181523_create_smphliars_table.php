<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmphliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smphliars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("lokasi");
            $table->string("ritasi");
            $table->string("kapasitas");
            $table->string("jumlahrit");
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
        Schema::dropIfExists('smphliars');
    }
}
