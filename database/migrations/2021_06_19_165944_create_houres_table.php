<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houres', function (Blueprint $table) {
            $table->id();
            $table->integer('giorno');
            $table->string('oraMattinoInizio');
            $table->string('oraMattinoFine');
            $table->string('oraPomeriggioInizio')->nullable();
            $table->string('oraPomeriggioFine')->nullable();
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
        Schema::dropIfExists('houres');
    }
}
