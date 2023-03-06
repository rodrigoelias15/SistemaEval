@extends('layouts.layout')

@section('titulo_pagina')
Cadastro Instituição
@endsection

@section('content')
<x-panels.content>
    <x-icons.logo/>
    
    <x-alert />

    <x-panels.form>
      <form method="post" class="form-group">
        @csrf
        <div class="form-group">
          <label for="inputInstituicao">Nome da Instituição</label>
          <input type="text" class="form-control" id="inputInstituicao" name="nome_instituicao">
        </div>
        <div class="form-group">
          <label for="inputEndereco">Endereço</label>
          <input type="text" class="form-control" id="inputEndereco" name="endereco_instituicao">
        </div>
        <div class="form-group">
          <label for="inputCidade">Cidade</label>
          <input type="text" class="form-control" id="inputCidade" name="cidade_instituicao">
        </div>
        <div class="form-row">
          <div class="col-sm-6 form-group">
            <label for="inputEstado">Estado</label>
            <select name="estado_instituicao" class="form-control">
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
          <div class="col-sm-6 form-group">
            <label for="inputPais">País</label>
            <input type="text" class="form-control" id="inputPais" name="pais_instituicao">
          </div>
        </div>
        <div class="form-row form-group">
          <div class="col-sm-6 col-md-6">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="inputCEP" name="cep_instituicao">
          </div>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary py-2 w-50 my-3">Cadastrar</button>
        </div>
      </form>
    </x-panels.form>

</x-panels.content>

@endsection