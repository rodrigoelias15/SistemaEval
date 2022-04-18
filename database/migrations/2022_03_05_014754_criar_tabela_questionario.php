<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaQuestionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionario', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome_avaliador_questionario');
                $table->string('nome_item_digital_questionario');
                $table->date('data_item_digital_questionario');
                $table->integer('questionario_item1');
                $table->integer('questionario_item2');
                $table->integer('questionario_item3');
                $table->integer('questionario_item4');
                $table->integer('questionario_item5');
                $table->integer('questionario_item6');
                $table->integer('questionario_item7');
                $table->integer('questionario_item8');
                $table->integer('questionario_item9');
                $table->integer('questionario_item10');
                $table->integer('questionario_item11');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questionario');
    }
}
