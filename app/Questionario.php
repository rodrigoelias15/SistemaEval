<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    public $timestamps = false;
    protected $table = 'questionario';
    protected $fillable = [
        'nome_avaliador_questionario', 'nome_item_digital_questionario', 'data_item_digital_questionario',
         'questionario_item1', 'questionario_item2', 'questionario_item3', 'questionario_item4', 'questionario_item5', 'questionario_item6', 'questionario_item7', 'questionario_item8', 'questionario_item9', 'questionario_item10', 'questionario_item11'
    ];
}
