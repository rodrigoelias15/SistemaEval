@extends('layouts.layout')

@section('titulo_pagina')
Instituições Cadastradas
@endsection

@section('content')

    <x-panels.content>
        @if(session()->has('mensagem'))
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="alert alert-success text-center">
                        {{ session()->get('mensagem') }}
                    </div>
                </div>
            </div>
        @endif
        
        @if($instituicaoensino->count() > 1)
            <div class="grid mt-2">
                @foreach($instituicaoensino as $instituicao)
                    <x-cards.instituicao
                        :instituicao="$instituicao"
                        class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
                    />
                @endforeach
            </div>
        @else
            <div class="mt-4 text-center">
                <h1>Nenhuma Instituição Cadastrada</h1>
            </div>
        @endif
    </x-panels.content>
@endsection