<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemDigital extends Model
{
    public $timestamps = false;
    protected $table = 'itemdigital';
    protected $fillable = ['nome_item_digital', 'area_item_digital','escolaridade_item_digital', 'url_item_digital', 'descricao_item_digital','item_utilizado_larga_escala', 'item_multidisciplinar', 'nome_avaliacao_item_digital','ano_item_digital', 'imagem_item_digital', 'nome_instituicao', 'plataforma_item_digital','instituicao_plataforma'];
}
