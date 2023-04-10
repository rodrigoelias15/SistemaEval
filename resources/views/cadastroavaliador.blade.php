@extends("layouts.layout")

@section("titulo_pagina")
Cadastro Avaliador
@endsection

@section("content")


<?php

$estadosBrasileiros = [
  "AC" => "Acre",
  "AC" => "Acre",
  "AL" => "Alagoas",
  "AP" => "Amapá",
  "AM" => "Amazonas",
  "BA" => "Bahia",
  "CE" => "Ceará",
  "DF" => "Distrito Federal",
  "ES" => "Espírito Santo",
  "GO" => "Goiás",
  "MA" => "Maranhão",
  "MT" => "Mato Grosso",
  "MS" => "Mato Grosso do Sul",
  "MG" => "Minas Gerais",
  "PA" => "Pará",
  "PB" => "Paraíba",
  "PR" => "Paraná",
  "PE" => "Pernambuco",
  "PI" => "Piauí",
  "RJ" => "Rio de Janeiro",
  "RN" => "Rio Grande do Norte",
  "RS" => "Rio Grande do Sul",
  "RO" => "Rondônia",
  "RR" => "Roraima",
  "SC" => "Santa Catarina",
  "SP" => "São Paulo",
  "SE" => "Sergipe",
  "TO" => "Tocantins",
];

?>

<x-panels.content>

    <x-form_commons />

    <x-panels.form>
        <form id="avaliadorform" method="post" class="form-group">
        @csrf
        <div class="form-row">
            <div class="col-sm-6 form-group">
                <label for="inputNome">Nome do Avaliador*</label>
                <input type="text"
                    class="form-control"
                    id="inputNome"
                    name="nome_avaliador"
                    value="{{ old('nome_avaliador') }}"
                    placeholder="Nome"
                    required
                >
            </div>
            <div class="col-sm-6 form-group">
                <label for="inputSobrenome">Sobrenome do Avaliador*</label>
                <input type="text"
                    class="form-control"
                    id="inputSobrenome"
                    name="sobrenome_avaliador"
                    value="{{ old('sobrenome_avaliador') }}"
                    placeholder="Sobrenome"
                    required
                >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail">E-mail do Avaliador*</label>
            <input type="text"
                class="form-control"
                id="inputEmail"
                name="email_avaliador"
                value="{{ old('email_avaliador') }}"
                placeholder="email@exemplo.com"
                required
            >
        </div>
        <div class="form-row">
            <div class="col-sm-6 form-group">
                <label for="inputInstituicao">Instituição do Avaliador</label>
                <select id="inputInstituicao"
                    class="form-control"
                    name="instituicao_avaliador"
                >
                    @if ($existeInstituicao)
                        @foreach($instituicaoCadastrada as $instituicao)
                            <option value="{{ $instituicao->nome_instituicao }}"
                                @if(old('instituicao_avaliador') == $instituicao->nome_instituicao)
                                    selected
                                @endif
                            >
                                {{$instituicao->nome_instituicao}}
                            </option>
                        @endforeach
                    @else
                        <option class="font-italic" selected disabled>Nenhuma Instituição Cadastrada</option>
                    @endif
                </select>
            </div>
            <div class="col-sm-6 form-group">
                <label for="cadinst_redirect">Cadastrar Instituição</label>
                <div class="btn btn-danger form-control" onClick="redirecionaCadastroInst()" id="cadinst_redirect">
                    Cadastrar Nova <span class="fa fa-plus"></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="inputFormAval">Formação do Avaliador*</label>
            <input type="text"
                class="form-control"
                id="inputFormAval"
                name="formacao_avaliador"
                value="{{ old('formacao_avaliador') }}"
                placeholder="Insira a formação"
                required
            >
        </div>

        <div class="form-group">
            <label for="inputOcupAval">Ocupação do Avaliador*</label>
            <input type="text"
                class="form-control"
                id="inputOcupAval"
                name="ocupacao_avaliador"
                value="{{ old('ocupacao_avaliador') }}"
                placeholder="Insira a ocupação"
                required
            >
        </div>

        <div class="form-group">
            <label for="inputAreaAtuacao">Área de Atuação*</label>
            <input type="text"
                class="form-control"
                id="inputAreaAtuacao"
                name="area_atuacao_avaliador"
                value="{{ old('area_atuacao_avaliador') }}"
                placeholder="Matemática Aplicada, Ciências da Terra"
                required
            >
        </div>

        <div class="form-group form-row">
            <div class="col-sm-6 col-md-6">
            <label for="inputCEP">CEP do Avaliador*</label>
            <input type="text"
                class="form-control"
                id="inputCEP"
                name="cep_avaliador"
                value="{{ old('cep_avaliador') }}"
                placeholder="Insira o CEP"
                required
            >
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-6">
            <label for="inputPais">País do Avaliador*</label>
            <input type="text"
                class="form-control"
                id="inputPais"
                name="pais_avaliador"
                value="{{ old('pais_avaliador') }}"
                placeholder="Insira o país"
                required
            >
            </div>
            <div class="col-sm-6 form-group">
            <div class='mb-2'>
                Estado do Avaliador*
            </div>
            <select class="form-control"
                name="estado_avaliador"
                id="estado1"
                placeholder="Escolher Estado"
                type="text"
                required>
            >
                @foreach($estadosBrasileiros as $estado)
                    <option value="{{ $estado }}"
                        @if(old('estado_avaliador') == $estado)
                            selected
                        @endif
                    >
                        {{$estado}}
                    </option>
                @endforeach
            </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputCidade">Cidade do Avaliador*</label>
            <input type="text"
                class="form-control"
                id="inputCidade"
                name="cidade_avaliador"
                value="{{ old('cidade_avaliador') }}"
                placeholder="Insira a cidade"
                required
            >
        </div>

        <div class="form-group">
            <label for="inputEndereco">Logradouro do Avaliador*</label>
            <input type="text"
                class="form-control"
                id="inputEndereco"
                name="endereco_avaliador"
                value="{{ old('endereco_avaliador') }}"
                placeholder="Rua 123, Bairro XYZ"
                required
            >
        </div>

        <x-button> Cadastrar </x-button>
        </form>
    </x-panels.form>

  <x-sweetalerts.redirect_avalitem />

</x-panels.content>

@endsection