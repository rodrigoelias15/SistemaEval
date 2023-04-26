@extends('layouts.layout')

@section('titulo_pagina')
Relatório
@endsection

@section('content')

<x-panels.gridcontent2>
    <x-cards.relatorio :dadosQuestionario="$dadosQuestionario" />
</x-panels.gridcontent2>

@endsection
