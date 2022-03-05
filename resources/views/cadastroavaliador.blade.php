@extends("layouts.layout")

@section("titulo_pagina")
Cadastro Avaliador
@endsection

@section("content")
<div class="row justify-content-center">
  <div class="col-sm-8 col-md-6">
    <div class="logo my-3">
      <img class="img-fluid" src="img/caedlogo.png" alt="Logo Caed">
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form method="post" class="form-group">
      @csrf
      <div class="form-row">
        <div class="form-group col-sm-6">
          <label for="inputNome">Nome</label>
          <input type="text" class="form-control" id="inputNome" name="nome_avaliador">
        </div>
        <div class="form-group col-sm-6">
          <label for="inputSobrenome">Sobrenome</label>
          <input type="text" class="form-control" id="inputSobrenome" name="sobrenome_avaliador">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail">E-mail</label>
        <input type="text" class="form-control" id="inputEmail" name="email_avaliador">
      </div>
      <div class="form-group">
        <label for="inputEndereco">Endereço</label>
        <input type="text" class="form-control" id="inputEndereco" name="endereco_avaliador">
      </div>
      <div class="form-group">
        <label for="inputCidade">Cidade</label>
        <input type="text" class="form-control" id="inputCidade" name="cidade_avaliador">
      </div>
      <div class="form-group">
        <label for="inputCPF">CPF</label>
        <input type="text" class="form-control" id="inputCPF" name="cpf_avaliador">
      </div>
      <div class="form-group">
        <label for="inputInstituicao">Instituição</label>
        <input type="text" class="form-control" id="inputInstituicao" name="instituicao_avaliador">
      </div>
      <div class="form-group">
        <label for="inputFormAval">Formação do Avaliador</label>
        <input type="text" class="form-control" id="inputFormAval" name="formacao_avaliador">
      </div>
      <div class="form-group">
        <label for="inputOcupAval">Ocupação do Avaliador</label>
        <input type="text" class="form-control" id="inputOcupAval" name="ocupacao_avaliador">
      </div>
      <div class="form-row">
        <div class="col-sm-6 form-group">
          <label for="inputEstado">Estado</label>
          <select class="form-control" name="estado_avaliador">
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
          <input type="text" class="form-control" id="inputPais" name="pais_avaliador">
        </div>
      </div>
      <div class="form-row form-group">
        <div class="col-sm-6 col-md-6">
          <label for="inputCEP">CEP</label>
          <input type="text" class="form-control" id="inputCEP" name="cep_avaliador">
        </div>
      </div>

      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary py-2 w-50 my-3">Cadastrar</button>
      </div>
    </form>
  </div>
</div>

@endsection