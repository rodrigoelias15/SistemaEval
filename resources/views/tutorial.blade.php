@extends('layouts.layout')

@section('titulo_pagina')
    Tutorial
@endsection

@section('content')
    <div class="row justify-content-center">
        <div id="texto_apresentacao" class="text-justify mt-3 w-50">
            <section>
                Prezado usuário seja bem-vindo ao Sistema e-VAL! <br>
                Para iniciar a avaliação de um item digital, será necessário: <br> <br>
                <i>
                a) Cadastrar uma Instituição de Ensino que será vinculada a um avaliador no menu "Cadastrar Instituição"; <br>
                b) Cadastrar o Avaliador no menu "Avaliador/Cadastrar Avaliador"; <br>
                c) Cadastrar o Item Digital que será avaliado no menu "Item Digital e Instituições/Cadastrar Item Digital"; <br>
                d) Após feito os cadastros iniciais, você estará pronto para avaliar o item digital cadastrado clicando em "Avaliar Item"; <br>
                e) Caso deseje, pode-se consultar os itens digitais, instituições e avaliadores já cadastrados no sistema, e verificar os relatórios de Itens já avaliados no menu "Relatórios".<br> <br>
                </i>

                Desejamos um ótimo trabalho!                
            </section>
        </div>
    </div>
@endsection
