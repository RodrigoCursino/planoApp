<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoRecursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_recurso', function (Blueprint $table) {
            $table->integer('plano_id')->unsigned();
            $table->integer('recurso_id')->unsigned();

            // chave primarias compostas
            $table->primary(['plano_id', 'recurso_id']);

            // referência muito p/ muitos planos
            $table->foreign('plano_id')->references('id')->on('planos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // referência muito p/ muitos planos
            $table->foreign('recurso_id')->references('id')->on('recursos')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('plano_recurso');
    }
}
