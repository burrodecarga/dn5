<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtemas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tema_id');
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->integer('posicion')->default(0);
            $table->string('publicado')->nullable();
            $table->string('autor');
            $table->dateTime('actualizado');
            $table->string('icon');
            $table->string('imagen')->nullable();
            $table->timestamps();
            $table->foreign('tema_id')->references('id')->on('temas')
           ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtemas');
    }
}
