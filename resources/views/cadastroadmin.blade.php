@extends('layouts.layout')

@section('titulo_pagina')
Cadastro Usuário Administrador
@endsection

@section('content')
<x-panels.content>
    <x-icons.logo/>

    <x-panels.form>
      <form method="post" class="form-group">
        @csrf
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNome">Nome</label>
            <input type="text" class="form-control" id="inputNome">
          </div>
          <div class="form-group col-md-6">
            <label for="inputSobrenome">Sobrenome</label>
            <input type="text" class="form-control" id="inputSobrenome">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEndereco">Endereço</label>
          <input type="text" class="form-control" id="inputEndereco">
        </div>
        <div class="form-group">
          <label for="inputCidade">Cidade</label>
          <input type="text" class="form-control" id="inputCidade">
        </div>
        <div class="form-group">
          <label for="inputCPF">CPF</label>
          <input type="text" class="form-control" id="inputCPF">
        </div>
        <div class="form-group">
          <label for="inputInstituicao">Instituição</label>
          <input type="text" class="form-control" id="inputInstituicao">
        </div>
        <div class="form-group form-row justify-content-end">
          <div class="col-md-4">
            <label for="inputEstado">Estado</label>
            <select name="estados-brasil" class="form-control">
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="inputCEP">
          </div>
        </div>
        <x-button>
          Cadastrar
        </x-button>
      </form>
    </x-panels.form>

    <x-sweetalerts.confirmation_form />

</x-panels.content>

@endsection