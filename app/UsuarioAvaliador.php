<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioAvaliador extends Model
{
    public $timestamps = false;
    protected $table = 'usuarioavaliador';
    protected $fillable = ['nome_avaliador', 'sobrenome_avaliador','email_avaliador', 'endereco_avaliador', 'cidade_avaliador', 'cpf_avaliador', 'instituicao_avaliador','formacao_avaliador', 'ocupacao_avaliador', 'estado_avaliador','pais_avaliador', 'cep_avaliador'];
}
