<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaInstituicao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('instituicao', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome_instituicao');
            $table->string('endereco_instituicao');
            $table->string('cidade_instituicao');
            $table->string('estado_instituicao');
            $table->string('pais_instituicao');
            $table->string('cep_instituicao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instituicao');
    }
}
