@extends('layouts.layout')

@section('titulo_pagina')
Contato
@endsection

@section('content')
<x-panels.content>
    
    <x-icons.logo />

    <x-panels.form>
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

        <x-button> Enviar </x-button>

    </x-panels.form>

    <x-sweetalerts.confirmation_form />

</x-panels.content>

@endsection