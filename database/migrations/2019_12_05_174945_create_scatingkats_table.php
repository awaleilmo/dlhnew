<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScatingkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scatingkats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("namasekolah");
            $table->string("alamat");
            $table->string("sk");
            $table->string("kepalasekolah");
            $table->string("penghargaan");
            $table->string("tahun");
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
        Schema::dropIfExists('scatingkats');
    }
}
