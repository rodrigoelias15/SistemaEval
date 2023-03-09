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

    <!-- <x-panels.gridcontent /> -->
    <x-panels.gridcontent>

 
    </x-panels.gridcontent>

    <script>
        Swal.fire({
            imageUrl: "img/questionario.jpeg",
            title: "Boas vindas ao Sistema E-Val!",
            html:
                '<p>O <b>Sistema e-VAL</b> tem por objetivo auxiliar instituições, professores e desenvolvedores de itens digitais quanto a seu nível de interatividade.' +
                'Através de um questionário interativo, o sistema calcula a pontuação do item digital que está sendo avaliado, que é mostrado em tempo real.' +
                'O sistema permite a geração de um relatório com todas as questões respondidas, e caso o usuário deseje, poderá realizar o download do mesmo.</p>',
            confirmButtonText: "Entendi, vamos começar !",
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        });
    </script>
@endsection
