@extends("layouts.layout")

@section("titulo_pagina")
Questionário
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
        <div class="form-group col-sm-8">
          <label for="inputNome">Nome</label>
          <select name="nome_avaliador_questionario" id="inputNome" class="form-control">
            @foreach ($usuarioavaliador as $usuario)
            <option value="{{$usuario->nome_avaliador.' '.$usuario->sobrenome_avaliador}}">
              {{$usuario->nome_avaliador.' '.$usuario->sobrenome_avaliador}}
            </option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-8">
          <label for="inputItemDigital">Nome do Item Digital</label>
          <select name="nome_item_digital_questionario" id="inputItemDigital" class="form-control">
            @foreach ($itemdigital as $item)
              <option value="{{$item->nome_item_digital}}">
                {{$item->nome_item_digital}}
              </option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputDataAvaliacao">Data da Avaliação</label>
        <input type="date" class="form-control col-md-6 col-xl-4 col-lg-4 col-6" id="inputDataAvaliacao" name="data_item_digital_questionario">
      </div>
      
      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary py-2 my-3">Responder Questionário</button>
      </div>
    </form>
    
  </div>
</div>

@endsection