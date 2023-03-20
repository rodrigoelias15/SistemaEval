@extends('layouts.layout')

@section('titulo_pagina')
Visualizar Relatórios Por Ordem dos Nomes
@endsection

@section('content')

<x-panels.gridcontent2>
    <x-cards.relatorio_ordenado_nome :relatorio_questionario="$relatorio_questionario" />
</x-panels.gridcontent2>

@endsection