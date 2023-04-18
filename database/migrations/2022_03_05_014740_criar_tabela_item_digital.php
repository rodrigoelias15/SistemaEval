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
        Schema::connection('mysql')->create('itemdigital', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome_item_digital');
            $table->string('area_item_digital');
            $table->string('escolaridade_item_digital');
            $table->string('url_item_digital');
            $table->string('descricao_item_digital', 1000);
            $table->string('item_utilizado_larga_escala');
            $table->string('item_multidisciplinar');
            $table->string('nome_avaliacao_item_digital');
            $table->integer('ano_item_digital');
            $table->string('imagem_item_digital')->nullable();
            $table->string('nome_instituicao');
            $table->string('plataforma_item_digital');
            $table->string('instituicao_plataforma');
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
        Schema::drop('itemdigital');
    }
}
