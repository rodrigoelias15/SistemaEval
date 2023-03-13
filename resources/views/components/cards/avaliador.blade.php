@props(['avaliador'])

<x-cards.template>
    <header>
        <div class="mt-4">
            <h1 class="text-3xl card-title">
                <b>{{$avaliador->nome_avaliador}} {{$avaliador->sobrenome_avaliador}}</b>
                <span class="fa fa-user"></span>
            </h1>
            <span class="mt-2 block text-gray-400 text-xs">
                <i class="fa fa-house"></i>
                {{$avaliador->cidade_avaliador}}, {{$avaliador->estado_avaliador}}, {{$avaliador->pais_avaliador}}, {{$avaliador->cep_avaliador}}
                <br/>
            </span>
            <span class="mt-2 block text-gray-400 text-xs">
                <i class="fa fa-envelope"></i> <b>E-mail:</b>
                {{$avaliador->email_avaliador}}
                <br/>
            </span>
            <span class="mt-2 block text-gray-400 text-xs">
                <i class="fa fa-building-columns"></i> <b>Instituição:</b>
                {{$avaliador->instituicao_avaliador}}
            </span>
        </div>
    </header>

    <div class="card-body text-sm mt-2 space-y-4">
        <p> <b>Formação:</b> {{$avaliador->formacao_avaliador}}</p>
        <p> <b>Ocupação:</b> {{$avaliador->ocupacao_avaliador}}</p>
        <p> <b>Área de Atuação:</b> {{$avaliador->area_atuacao_avaliador}}</p>
        <!-- <p> <b>Endereço:</b> {{$avaliador->endereco_avaliador}}</p> -->
    </div>

    <footer>
        <form class="text-center mb-3" method="post" action="/avaliador/remover/{{$avaliador->id}}" onsubmit="return confirm('Deseja excluir o avaliador {{$avaliador->nome_avaliador}} {{$avaliador->sobrenome_avaliador}}?')">
            @csrf
            <button class="btn btn-danger px-4" type="submit">Excluir</button>
        </form>
    </footer>
</x-cards.template>

