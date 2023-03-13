@extends('layouts.layout')

@section('titulo_pagina')
    Página Inicial
@endsection

@section('content')

    <x-navigation.menu />
    <x-sweetalerts.welcome />
    
@endsection
