<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemDigital extends Model
{
    public $timestamps = false;
    protected $table = 'itemdigital';
    protected $fillable = ['nome_item_digital', 'area_item_digital','escolaridade_item_digital', 'url_item_digital', 'descricao_item_digital','item_utilizado', 'nome_avaliacao_item_digital','ano_item_digital', 'nome_instituicao', 'plataforma_item_digital','instituicao_plataforma', 'instituicao_item_digital','nome_avaliador','email_avaliador','ocupacao_avaliador','formacao_avaliador','instituicao_avaliador'];
}
