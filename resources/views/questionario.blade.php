@extends('layouts.layout')

@section('titulo_pagina')
Questionário de Interatividade
@endsection

@section('content')

{{-- Script de interatividade --}}

<script defer src="js/interatividade.js"></script> {{-- script baixado durante carregamento mas só executado depois de carregada a página (é adiado) --}}

@php
    $messages = json_decode(file_get_contents(resource_path('/json/messages.json')));
    $questoes = json_decode(file_get_contents(resource_path('/json/questoes.json')));
@endphp

<x-panels.content_special>
    <div class="row">

        <x-icons.logo_special
            :questionario="$questionario"
        />

        <div class="col-lg-12 my-4">

            {{-- Nível de interatividade --}}

            <div id="barra" class="transparencia">
                <div class="progress barra_progresso w-50 mb-2">
                    <div id="myBar" class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <span id="interatividade" class="justify-content-center row">
                    <p id="count"></p>
                    <p class="pr-3"> Nível de Interatividade: </p>
                    <p id="nivel_interatividade" class="font-weight-bold"></p>
                </span>
            </div>

            {{-- ---------------------------------- --}}

            <x-alerts.error />

            <form id="form1" method="post" class="formulario">
                @csrf

                @include('questoes.questao1')
                {{-- @include('questoes.questao2') --}}
                @include('questoes.questao3')
                @include('questoes.questao4')
                @include('questoes.questao5')
                @include('questoes.questao6')
                @include('questoes.questao7')
                @include('questoes.questao8')
                @include('questoes.questao9')
                @include('questoes.questao10')
                @include('questoes.questao11')
                @include('questoes.questao12')
                @include('questoes.questao13')

                <textarea id="campo_observacao" name="observacao" rows="5" cols="33" placeholder="Observações"></textarea>
                <div class="notas_rodape">
                    <b>Nota de Rodapé:</b>
                    <p> e-VAL: Avaliação da interatividade em itens digitais
                        Pesquisadoras: Dra. Liamara Scortegagna (UFJF) e Dra. Adriana Bruno (UNIRIO).
                        Projeto de pesquisa: Itens digitais e interativos em e-Avaliação de larga escala: processos cognitivos, estratégias e produtos didáticos na relação entre meio impresso e meio digital (2020/2021).
                        Financiamento: Centro de Políticas Públicas e Avaliação da Educação da Universidade Federal de Juiz de Fora (CAEd/UFJF).
                    </p>
                </div>
                <div class="form-group justify-content-end text-right">
                    <input class="btn btn-primary px-4" title="Gera Relatório para Impressão/Download" type="submit" value="Gerar Relatório">
                </div>
            </form>

        </div>
    </div>

    <x-sweetalerts.info_help />
</x-panels.content_special>

@endsection