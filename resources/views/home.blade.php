@extends('layouts.layout')

@section('titulo_pagina')
    Página Inicial
@endsection

<style>
    *,
    *:before,
    *:after{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    #close {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem; 
        padding-left: 2.5rem;
        padding-right: 2.5rem; 
        background-color: #FCD34D; 
        color: #000000; 
        font-size: 0.75rem;
        line-height: 1rem; 
        font-weight: 600; 
        text-transform: uppercase; 
        border-radius: 1rem;
        border-style: outset;
        border-color: #F57F17; 
    }
    #close:hover{
        background-color: #F57F17;
    }
</style>

@section('content')

    <x-navigation.menu />
    <x-sweetalerts.welcome />
    
@endsection
