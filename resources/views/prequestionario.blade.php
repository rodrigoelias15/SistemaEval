@extends("layouts.layout")

@section("titulo_pagina")
Questionário
@endsection

@section("content")
<div class="row justify-content-center">
  <div class="col-sm-8 col-lg-6 col-7 col-md-7">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="logo my-3">
      <img class="img-fluid" src="img/caedlogo.png" alt="Logo Caed">
    </div>

    <div id="instrucao_questionario" class="text-justify my-3">
        <section>
          Prezado Usuário: <br>
          Para avaliar o nível de interatividade do Item Digital, observe as questões a seguir e escolha a alternativa que se adequa a realidade do Item e, caso tenha alguma dúvida quanto a alternativa, utilize a opção de “ajuda” que está disposta no final de cada alternativa (<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
          </svg>). <br>
          Observe que conforme você vai respondendo as questões, automaticamente o nível de interatividade estará representado no gráfico.            
        </section>
    </div>

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
    
  </div>
</div>

@endsection