<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notif_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dokling')->nullable();
            $table->string('data')->nullable();
            $table->string('pelaporan')->nullable();
            $table->string('banksampah')->nullable();
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
        Schema::dropIfExists('notif_admins');
    }
}
