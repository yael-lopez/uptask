<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_tareas', function (Blueprint $table) {
            $table->id();
            $table->integer('tarea_id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->text('imagen')->nullable();
            $table->date('fecha_entrega');
            $table->boolean('estatus');
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
        Schema::dropIfExists('item_tareas');
    }
}
