@extends('layouts.layout')

@section('titulo_pagina')
Relatório
@endsection

@section('content')

<x-panels.gridcontent2>
    <x-cards.relatorio :questionario="$questionario" />
</x-panels.gridcontent2>

@endsection
