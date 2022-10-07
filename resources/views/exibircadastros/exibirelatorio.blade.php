@extends('layouts.layout')

@section('titulo_pagina')
    Visualizar Relatório do Questionário
@endsection

@section('content')
    <div class="row">
        <select class="custom-select" name="ordenaRelatorio" id="ordena">
            <option selected>Escolha uma ordenação</option>
            <option value="1">
                Ordena por nome
            </option>
            <option value="2">
                Ordena por data
            </option>
        </select>
        <button class="btn btn-primary" id="btn">Ordenar</button>
    </div>

    <script type="text/javascript">
        const btn = document.querySelector('#btn');
        const ordena = document.querySelector('#ordena');
        btn.onclick = (event) => {
            if(ordena.selectedIndex == "1"){
                window.location.href = "{{route('relatorioOrdenadoNome')}}";
            }
            else if(ordena.selectedIndex == "2"){
                window.location.href = "{{route('relatorioOrdenadoData')}}";
            }
        };
    </script>
@endsection
