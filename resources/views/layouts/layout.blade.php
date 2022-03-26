<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>@yield('titulo_pagina')</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!---->

    <!--Gerador PDF-->
    <script src="js/pdfGenerator.js"></script>
    <!---->
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/home_sistema">Início</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= route('pre_questionario') ?>">Questionário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route('cadastro_itemdigital') ?>">Cadastrar Item Digital<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route('cadastro_instituicao')?>">Cadastrar Instituição</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route('cadastro_avaliador')?>">Cadastrar Avaliador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contatoadmin">Contato com Administrador do Sistema</a>
                </li>                                           
                <li class="nav-item">
                    <a class="nav-link" href="/sair">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>