@props(['item'])

<x-cards.template>
    <header>
        <div class="mt-4">
            <h1 class="text-3xl card-title">
                {{ $item->nome_item_digital }}
                <span class="fa fa-building-columns"></span>
            </h1>
            
            <p>{{$item->escolaridade_item_digital}} : {{$item->area_item_digital}}</p>
       
            <img id="imagem_item_digital_{{$item->id}}"
                src="{{ url('Imagens/'.$item->imagem_item_digital) }}"
                onerror="this.onerror=null; this.src='img/graypanel.png'" 
                class="imagem_item_digital"
                data-zoom-image="{{ url('Imagens/'.$item->imagem_item_digital) }}"
                alt="Item Digital {{$item->id}}"
                style="width:100%;
                    height:100%;
                    object-fit:cover;
                    margin-bottom:1rem;"
            >
            <span class="mt-2 block text-gray-400 text-xs">
                {{$item->url_item_digital}}
            </span>
        </div>
    </header>

    <div class="card-body text-sm mt-2 space-y-4">
        @if( $item->item_multidisciplinar  == 'Sim')
            <p> <b>-Item multidisciplinar-</b></p>
        @endif
        <p> <b>Descrição do Item Digital:</b> {{$item->descricao_item_digital}}</p>
        
        <div class="mt-2">
            <p> <b>Item armazenado na plataforma:</b> {{$item->plataforma_item_digital}}
            <p> <b>Responsável:</b> {{$item->instituicao_plataforma}}</p>
        </div>
        
        <div class="mt-2">
            @if( $item->item_utilizado_larga_escala  == 'Sim')
                <p> <b>-Utilizado em larga escala-</b></p>
                <p> <b>{{$item->nome_instituicao}}, {{$item->ano_item_digital}}</b> </p>
                <p> <b>Avaliação em que foi utilizado:</b> {{$item->nome_avaliacao_item_digital}}</p>
            @endif
        </div>
    </div>
    
    <footer>
        <form class="text-center mb-3" method="post" action="/cadastroitemdigital/remover/{{$item->id}}" onsubmit="return confirm('Deseja excluir o Item Digital {{$item->nome_item_digital}}?')">
            @csrf
            <button class="btn btn-danger px-4" type="submit">Excluir</button>
        </form>
    </footer>
</x-cards.template>

