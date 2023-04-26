@extends('layouts.layout')

@section('titulo_pagina')
Visualizar Relatórios Por Ordem dos Nomes
@endsection

@section('content')

<x-panels.gridcontent2>
    <x-cards.relatorio_ordenado_nome :relatorioQuestionario="$relatorioQuestionario" />
</x-panels.gridcontent2>

@endsection