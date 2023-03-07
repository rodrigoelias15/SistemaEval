@extends("layouts.layout")

@section("titulo_pagina")
Questionário
@endsection

@section("content")

<x-panels.content>
    <x-icons.logo />

    <x-alert />
  
  
  
    <x-panels.form>
      <form method="post" class="form-group">
        @csrf
        <div class="form-row">
          <div class="form-group col-sm-8">
            <label for="inputNome">Nome do Avaliador</label>
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
          <button type="submit" class="btn btn-primary py-2 my-3">Avaliar Item</button>
        </div>
      </form>
    </x-panels.form>
</x-panels.content>


@endsection