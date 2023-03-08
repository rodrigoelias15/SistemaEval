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
        
        <div id="texto_apresentacao" class='popup justify-content-center row class="text-justify' 
            style="background: url(img/graypanel.png);
            border-radius: 1.75rem;
            margin: 0.5rem;
            border: #ffffff"
        >   
            <img id="img_inicial" src="img/questionario.jpeg"
                style="border-radius: 1.75rem;
                padding: 0.5rem;"
            >
            <section>
                O Sistema e-VAL tem por objetivo auxiliar instituições, professores e desenvolvedores de itens digitais quanto a seu nível de interatividade, através de um questionário interativo, o sistema calcula a pontuação do item digital que está sendo avaliado, que é mostrado em tempo real.
                O sistema permite a geração de um relatório com todas as questões respondidas, e caso o usuário deseje, poderá realizar o download do mesmo.
                <br>
            </section>

            <button id="close" style="  top: 50%;
                width: 100%;
                text-align: center;"
            >
                Entendi, vamos começar !
            </button>
            
        </div>
    </x-panels.gridcontent>

    <script>
        window.addEventListener("load", function(){
            setTimeout(
                function open(event){
                    document.querySelector(".popup").style.display = "block";
                },
                1000
            )
        });
        document.querySelector("#close").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
        });
    </script>

    <!-- <script type='text/javascript'>//<![CDATA[ 
        window.onload=function(){
        (function() {
            var visited = localStorage.getItem('visited');
            if (!visited) {
                document.getElementById("texto_apresentacao").style.visibility = "visible";
                localStorage.setItem('visited', true);
            }
        })();
    }//]]>  -->
@endsection
