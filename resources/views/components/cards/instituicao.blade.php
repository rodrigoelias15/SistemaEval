@props(['instituicao'])

<x-cards.template>
    <header>
        <div class="mt-4">
            <h1 class="text-3xl card-title">
                {{ $instituicao->nome_instituicao }}
                <span class="fa fa-building-columns"></span>
            </h1>
            <span class="mt-2 block text-gray-400 text-xs">
                {{$instituicao->cidade_instituicao}}, {{$instituicao->estado_instituicao}}, {{$instituicao->pais_instituicao}}
            </span>
        </div>
    </header>

    <div class="card-body text-sm mt-2 space-y-4">
        <p> <b>Endereço:</b> {{$instituicao->endereco_instituicao}}</p>
        <p> <b>CEP:</b> {{$instituicao->cep_instituicao}}</p>
    </div>

    <footer>
        <form class="text-center mb-3" method="post" action="/cadastroinstituicao/remover/{{$instituicao->id}}" onsubmit="return confirm('Deseja excluir a Instituição {{$instituicao->nome_instituicao}}?')">
            @csrf
            <button class="btn btn-danger px-4" type="submit">Excluir</button>
        </form>
    </footer>
</x-cards.template>

