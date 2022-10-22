<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Niveles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel', function (Blueprint $table) {
            $table->id('id_nivel');
            $table->integer('nivel');
            $table->string('clave', 30)->unique();
            $table->string('nombre', 30);
            $table->boolean('activo');
            $table->datetime('fecha_cre')->useCurrent();
            $table->datetime('fecha_mo')->useCurrent();
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
