<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStanoviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stanovi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('naziv');
            $table->boolean('internet');
            $table->string('lokacija');
            $table->float('kvadratura');
            $table->integer('broj_soba');
            $table->float('cijena_stana');
            $table->longText('opis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stanovi');
    }
}
