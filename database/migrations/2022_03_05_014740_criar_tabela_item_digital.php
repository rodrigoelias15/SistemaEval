<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaItemDigital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemdigital', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome_item_digital');
            $table->string('area_item_digital');
            $table->string('escolaridade_item_digital');
            $table->string('url_item_digital');
            $table->string('descricao_item_digital');
            $table->integer('item_utilizado');
            $table->string('nome_avaliacao_item_digital');
            $table->integer('ano_item_digital');
            $table->string('nome_instituicao');
            $table->string('plataforma_item_digital');
            $table->string('instituicao_plataforma');
            $table->string('instituicao_item_digital');
            $table->string('nome_avaliador');
            $table->string('email_avaliador');
            $table->string('ocupacao_avaliador');
            $table->string('formacao_avaliador');
            $table->string('instituicao_avaliador');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('itemdigital');
    }
}
