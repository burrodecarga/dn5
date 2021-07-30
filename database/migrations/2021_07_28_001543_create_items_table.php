<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subtema_id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->integer('posicion')->default(0);
            $table->string('publicado')->nullable();
            $table->string('autor');
            $table->dateTime('actualizado');
            $table->string('icon');
            $table->timestamps();
            $table->foreign('subtema_id')->references('id')->on('subtemas')
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
        Schema::dropIfExists('items');
    }
}
