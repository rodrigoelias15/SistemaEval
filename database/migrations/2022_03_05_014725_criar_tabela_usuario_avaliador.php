<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaUsuarioAvaliador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('usuarioavaliador', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome_avaliador');
            $table->string('sobrenome_avaliador');
            $table->string('email_avaliador');
            $table->string('endereco_avaliador');
            $table->string('cidade_avaliador');
            $table->string('instituicao_avaliador');
            $table->string('formacao_avaliador');
            $table->string('ocupacao_avaliador');
            $table->string('area_atuacao_avaliador');
            $table->string('estado_avaliador');
            $table->string('pais_avaliador');
            $table->string('cep_avaliador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarioavaliador');
    }
}
