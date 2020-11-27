<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreareTabelMesaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesaje', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nume');
            $table->string('email');
            $table->string('firma');
            $table->string('telefon');
            $table->text('mesaj');
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
        Schema::dropIfExists('mesaje');
    }
}
