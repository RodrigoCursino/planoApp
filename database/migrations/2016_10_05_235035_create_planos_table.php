<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('objetivoEspecifico',2000);
            $table->string('objetivoGeral',1000);
            $table->integer('ano');
            $table->integer('semestre');

            $table->timestamps();
            $table->date('fimDisciplina');

            // relação entre plano e disciplina 1 para n
            $table->integer('disciplina_id')->unsigned()->nullable();
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')
                ->onUpdate('cascade')
                ->onDelete('set null');

            // relação entre plano e professor 1 para n
            $table->integer('professor_id')->unsigned()->nullable();
            $table->foreign('professor_id')->references('id')->on('professors')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planos');
    }
}
