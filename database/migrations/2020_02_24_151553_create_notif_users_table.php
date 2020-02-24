<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notif_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('amdal')->nullable();
            $table->string('uklupl')->nullable();
            $table->string('sppl')->nullable();
            $table->string('foto')->nullable();
            $table->string('video')->nullable();
            $table->string('pengaduan')->nullable();
            $table->string('banksampah')->nullable();
            $table->string('data')->nullable();
            $table->string('warta')->nullable();
            $table->string('pengumuman')->nullable();
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
        Schema::dropIfExists('notif_users');
    }
}
