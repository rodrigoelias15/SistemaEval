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
        Schema::connection('pgsql')->create('questionario', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome_avaliador_questionario');
                $table->string('nome_item_digital_questionario');
                $table->date('data_item_digital_questionario');
                $table->string('questionario_item1',500);
                $table->string('questionario_item2',500);
                $table->string('questionario_item3',500);
                $table->string('questionario_item4',500);
                $table->string('questionario_item5',500);
                $table->string('questionario_item6',500);
                $table->string('questionario_item7',500);
                $table->string('questionario_item8',500);
                $table->string('questionario_item9',500);
                $table->string('questionario_item10',500);
                $table->string('questionario_item11',500);
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
