@extends('layouts.layout')

@section('titulo_pagina')
Visualizar Relatórios Por Ordem de Datas
@endsection

@section('content')

    <x-panels.gridcontent2>
        <x-cards.relatorio_ordenado_data :relatorioQuestionario="$relatorioQuestionario" />
    </x-panels.gridcontent2>

@endsection