@extends('layouts.layout')

@section('titulo_pagina')
Visualizar Item Digital
@endsection

@section('content')
    
    <x-alerts.success />
    <x-alerts.error />
    <x-panels.gridcontent>
        @if($itemdigital->count() >= 1)
            @foreach($itemdigital as $item)
                <x-cards.item
                    :item="$item"
                    class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
                />
            @endforeach
        @else
            <div class="mt-4 text-center">
                <h1>Nenhum Item Cadastrado</h1>
            </div>
        @endif
    </x-panels.gridcontent>

@endsection