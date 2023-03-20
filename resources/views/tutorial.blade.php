@extends('layouts.layout')

@section('titulo_pagina')
    Tutorial
@endsection

@section('content')

    <x-alerts.success />
    <x-alerts.error />

    <x-panels.gridcontent2>
        <x-cards.tutorial />
    </x-panels.gridcontent2>
    
@endsection
