<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->text('matricula', 30)->unique();
            $table->string('nombreu', 30);
            $table->string('app', 30);
            $table->string('apm', 30);
            $table->date('fech_nac');
            $table->string('genero',20);
            $table->text('foto');
            $table->text('email');
            $table->text('pass');
            $table->integer('nivel');
            $table->string('activo',30);
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
        Schema::dropIfExists('usuario');
    }
}
