@extends('layouts.layout')

@section('titulo_pagina')
Avaliadores Cadastrados
@endsection

@section('content')

    <x-alerts.success />
    <x-alerts.error />

    <x-panels.gridcontent>
        @if($usuarioAvaliador->count() >= 1)
            @foreach($usuarioAvaliador as $usuario)
                <x-cards.avaliador
                    :avaliador="$usuario"
                />
            @endforeach
        @else
            <div class="mt-4 text-center">
                <h1>Nenhuma Avaliador Cadastrado</h1>
            </div>
        @endif
    </x-panels.gridcontent>

@endsection