<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    public $timestamps = false;
    protected $table = 'instituicao';
    protected $fillable = ['nome_instituicao', 'endereco_instituicao', 'cidade_instituicao', 'estado_instituicao', 'pais_instituicao', 'cep_instituicao'];
}
