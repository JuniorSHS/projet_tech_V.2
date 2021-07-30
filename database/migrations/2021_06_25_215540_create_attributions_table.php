<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('ordi_id')->unsigned();
            $table->date('date')->nullable();
            $table->time('heureDebut')->nullable();
            $table->time('heureFin')->nullable();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('ordi_id')->references('id')->on('ordi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributions');
    }
}
