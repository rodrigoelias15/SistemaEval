@extends('layouts.layout')

@section('titulo_pagina')
Instituições Cadastradas
@endsection

@section('content')

    <x-alerts.success />
    <x-alerts.error />
    <x-panels.gridcontent>
        @if($instituicaoensino->count() > 1)
            @foreach($instituicaoensino as $instituicao)
                <x-cards.instituicao
                    :instituicao="$instituicao"
                    class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
                />
            @endforeach
        @else
            <div class="mt-4 text-center">
                <h1>Nenhuma Instituição Cadastrada</h1>
            </div>
        @endif
    </x-panels.gridcontent>

@endsection