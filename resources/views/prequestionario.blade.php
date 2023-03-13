@extends("layouts.layout")

@section("titulo_pagina")
Questionário
@endsection

@section("content")

<x-panels.content>

    <x-form_commons />
  
    <x-panels.form>
      <form method="post" class="form-group">
        @csrf

        <div class="form-row">
          <div class="col-sm-6 col-md-6 form-group">
            <label for="inputNome">Nome do Avaliador</label>
            <select id="inputNome"
                class="form-control"
                name="nome_avaliador_questionario"
            >
                @if ($usuarioavaliador->count() >= 1)
                    @foreach($usuarioavaliador as $usuario)
                        <option value="{{ $usuario->nome_avaliador }}"
                            @if(old('nome_avaliador_questionario') == $usuario->nome_avaliador)
                                selected
                            @endif
                        >
                            {{$usuario->nome_avaliador}}
                        </option>
                    @endforeach
                @else
                    <option class="font-italic" selected disabled>Nenhum Avaliador Cadastrado</option>
                @endif
            </select>
          </div>
          <div class="col-sm-6 form-group">
              <label for="cadaval_redirect">Cadastrar Avaliador</label>
              <div class="btn btn-danger form-control" onClick="redirecionaCadastroAval()" id="cadaval_redirect">
                  Cadastrar Novo <span class="fa fa-plus"></span>
              </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-sm-6 col-md-6 form-group">
            <label for="inputItemDigital">Nome do Item Digital</label>
            <select id="inputItemDigital"
                class="form-control"
                name="nome_item_digital_questionario"
            >
                @if ($itemdigital->count() >= 1)
                    @foreach($itemdigital as $item)
                        <option value="{{ $item->nome_item_digital }}"
                            @if(old('nome_item_digital_questionario') == $item->nome_item_digital)
                                selected
                            @endif
                        >
                            {{$item->nome_item_digital}}
                        </option>
                    @endforeach
                @else
                    <option class="font-italic" selected disabled>Nenhum Item Digital Cadastrado</option>
                @endif
            </select>
          </div>
          <div class="col-sm-6 form-group">
              <label for="caditem_redirect">Cadastrar Item</label>
              <div class="btn btn-danger form-control" onClick="redirecionaCadastroItem()" id="caditem_redirect">
                  Cadastrar Novo <span class="fa fa-plus"></span>
              </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="inputDataAvaliacao">Data da Avaliação</label>
            <input type="date"
                class="form-control "
                id="inputDataAvaliacao"
                name="data_item_digital_questionario"
                required
                value="{{ old('data_item_digital_questionario', '') }}">
          </div>
        </div>

        <x-button>Avaliar Item</x-button>

      </form>
    </x-panels.form>

</x-panels.content>


@endsection