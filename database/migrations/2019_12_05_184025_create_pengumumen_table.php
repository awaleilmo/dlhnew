<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengumumansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumumans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("judul");
            $table->longText("deskripsi");
            $table->string("tipe");
            $table->string("foto");
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
        Schema::dropIfExists('pengumumans');
    }
}
