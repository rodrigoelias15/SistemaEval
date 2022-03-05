@extends('layouts.layout')

@section('titulo_pagina')
Contato
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="logo my-3">
            <img class="img-fluid" src="img/caedlogo.png" alt="Logo Caed">
        </div>
        <form method="post" class="form-group">
            @csrf
            <div class="form-group">
                <label for="inputEmailAdmin">E-mail do Administrador</label>
                <input type="email" class="form-control" id="inputEmailAdmin">
            </div>
            <div class="form-group">
                <label for="inputEmailAval">E-mail do Avaliador</label>
                <input type="email" class="form-control" id="inputEmailAval">
            </div>
            <div class="form-group">
                <label for="campo_mensagem">Mensagem</label>
                <textarea id="campo_mensagem" class="form-control" name="mensagem"></textarea>
            </div>
        </form>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</div>

@endsection