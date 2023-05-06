@props(['item'])

<x-cards.template>
    <header>
        <div class="mt-4">
            <h1 class="text-3xl card-title">
                {{ $item->nome_item_digital }}
                <span class="fa fa-building-columns"></span>
            </h1>
            <img id="imagem_item_digital_{{ $item->id }}" src="{{ url('Imagens/' . $item->imagem_item_digital) }}"
                onerror="this.onerror=null; this.src='img/graypanel.png'" class="imagem_item_digital"
                data-zoom-image="{{ url('Imagens/' . $item->imagem_item_digital) }}"
                alt="Item Digital {{ $item->id }}"
                style="width:100%; height:100%; object-fit:cover; margin-bottom:1rem;">
        </div>
    </header>

    <div class="card-body text-sm space-y-4">
        <p><b> Grau/Escolaridade:</b> {{ $item->escolaridade_item_digital }}</p>
        <p><b> Área/Disciplina:</b> {{ $item->area_item_digital }}</p>
        <span class="mt-2 block text-gray-400 text-xs">
            <b>URL do Item Digital:</b> {{ $item->url_item_digital }}
        </span>
        @if ($item->item_multidisciplinar == 'Sim')
            <p><b> Item multidisciplinar </b></p>
        @endif
        <p><b>Descrição do Item Digital:</b> {{ $item->descricao_item_digital }}</p>

        <p><b>Item armazenado na plataforma:</b> {{ $item->plataforma_item_digital }}
        <p><b>Responsável:</b> {{ $item->instituicao_plataforma }}</p>

        @if ($item->item_utilizado_larga_escala == 'Sim')
            <p><b>Item utilizado em larga escala:</b> Sim</p>
            <p><b>Instituição responsável pela avaliação:</b> {{ $item->nome_instituicao }}</p>
            <p><b>Ano da avaliação: </b>{{ $item->ano_item_digital }} </p>
            <p><b>Avaliação em que foi utilizado:</b> {{ $item->nome_avaliacao_item_digital }}</p>
        @endif
    </div>

    <footer>
        <form class="text-center mb-3" method="POST" action="/cadastroitemdigital/remover/{{ $item->id }}"
            onsubmit="return confirm('Deseja excluir o Item Digital {{ $item->nome_item_digital }}?')">
            @csrf
            <button class="btn btn-danger px-4" type="submit">Excluir</button>
        </form>
    </footer>
</x-cards.template>
