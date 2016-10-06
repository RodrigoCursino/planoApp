<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacaoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',250);
            $table->integer('peso');
            $table->double('notaMax');
            $table->integer('plano_id')->unsigned()->nullable();
            $table->foreign('plano_id')->references('id')->on('planos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('avaliacaoes');
    }
}
