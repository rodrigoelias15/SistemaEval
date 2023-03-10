@extends('layouts.layout')

@section('titulo_pagina')
Cadastro Instituição
@endsection

@section('content')

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
    <x-icons.logo/>
    
    <x-alerts.success />
    <x-alerts.error />
    <x-sweetalerts.info_form />

    <x-panels.form>
      <form id='instituicaoform' method="post" class="form-group">
        @csrf
        <div class="form-group">
            <label for="inputInstituicao">Nome da Instituição*</label>
            <input type="text"
                class="form-control"
                id="inputInstituicao"
                name="nome_instituicao"
                value="{{ old('nome_instituicao') }}"
                placeholder="Insira o nome da instituição"
                required
            >
        </div>

        <div class="form-group">
            <label for="inputEndereco">Logradouro*</label>
            <input type="text"
                class="form-control"
                id="inputEndereco"
                name="endereco_instituicao"
                value="{{ old('endereco_instituicao') }}"
                placeholder="Rua 123, Bairro XYZ"
                required
            >
        </div>  

        <div class="form-group">
            <label for="inputCidade">Cidade*</label>
            <input type="text"
                class="form-control"
                id="inputCidade"
                name="cidade_instituicao"
                value="{{ old('cidade_instituicao') }}"
                placeholder="Insira a cidade"
                required
            >
        </div>

        <div class="form-row">
          <div class="col-sm-6 form-group">
            <div class='mb-2'>
                Estado*
            </div>
            <select class="form-control"
                name="estado_instituicao"
                id="estado1"
                placeholder="Escolher Estado"
                type="text"
                required>
            >
              @foreach($estadosBrasileiros as $estado)
                  <option value="{{ $estado }}"
                      @if(old('estado_instituicao') == $estado)
                          selected
                      @endif
                  >
                      {{$estado}}
                  </option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-sm-6">
            <label for="inputPais">País*</label>
            <input type="text"
                class="form-control"
                id="inputPais"
                name="pais_instituicao"
                value="{{ old('pais_instituicao') }}"
                placeholder="Insira o país"
                required
            >
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-sm-6 col-md-6">
            <label for="inputCEP">CEP*</label>
            <input type="text"
                class="form-control"
                id="inputCEP"
                name="cep_instituicao"
                value="{{ old('cep_instituicao') }}"
                placeholder="Insira o CEP"
                required
            >
          </div>
        </div>

        <x-button>
          Cadastrar
        </x-button>
      </form>
    </x-panels.form>
    
    <x-sweetalerts.redirect_caditem />
    <x-sweetalerts.confirmation_form />

</x-panels.content>

@endsection