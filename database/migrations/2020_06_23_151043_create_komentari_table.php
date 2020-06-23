<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentariTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentari', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('komentar');
            $table->integer('id_user')->references('id')->on('users');
            $table->integer('id_stan')->references('id')->on('stan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentari');
    }
}
