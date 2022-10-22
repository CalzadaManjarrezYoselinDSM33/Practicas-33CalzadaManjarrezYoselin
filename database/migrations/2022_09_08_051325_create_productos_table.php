<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_productos');
            $table->string('codigo',30)->unique();
            $table->string('nombrep',30)->unique();
            $table->integer('cantidad');
            $table->decimal('costo');
            $table->integer('id_tipo');
            $table->integer('id_tienda');
            $table->boolean('activo');
            $table->datetime('fec_crea')->useCurrent();
            $table->datetime('fec_mod')->useCurrent();
            $table->text('foto');
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
        Schema::dropIfExists('productos');
    }
}
