<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiawasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diawasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("temuan");
            $table->string("kategori");
            $table->string("jumlahperusahaan");
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
        Schema::dropIfExists('diawasis');
    }
}
