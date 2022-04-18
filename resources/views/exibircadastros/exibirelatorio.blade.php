@extends('layouts.layout')

@section('titulo_pagina')
Visualizar Relatório do Questionário
@endsection

@section('content')
   

    <div class="row">
        @foreach($relatorio_questionario as $questionario)
        <div class="col-sm-6 my-3">
            <div class="card">        
                <div class="card-body">            
                    <p><span class="cabecalho"> Título do Item: </span> {{$questionario->nome_item_digital_questionario}} </p>
                    <p><span class="cabecalho"> Nome do Avaliador: </span> {{$questionario->nome_avaliador_questionario}} </p>
                    <p><span class="cabecalho"> Data da Avaliação: </span> {{ (new DateTime($questionario->data_item_digital_questionario))->format('d/m/Y')}} </p>
                
                    <section id="indicador1" class="my-3">
                        <h1 class="indicador" onclick="somaInteratividade()">Indicador 1: Textos e elementos gráficos</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item1 ?></p>                    
                    </section>
                
                    <section id="indicador2" class="my-3">
                        <h1 class="indicador">Indicador 2: Espaço/meio de interação</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item2 ?></p>
                    </section>
                
                    <section id="indicador3" class="my-3">
                        <h1 class="indicador">Indicador 3: Comportamento dos elementos no espaço</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item3 ?></p>                    
                    </section>
                
                    <section id="indicador4" class="my-3">
                        <h1 class="indicador">Indicador 4: Movimento/liberdade do usuário no item</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item4 ?></p>                    
                    </section>
                
                    <section id="indicador5" class="my-3">
                        <h1 class="indicador">Indicador 5: Suporte e feedback</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item5 ?></p>                    
                    </section>
                
                    <section id="indicador6" class="my-3">
                        <h1 class="indicador">Indicador 6: Diálogo entre usuário e conteúdo</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item6 ?></p>                    
                    </section>
                
                    <div class="page-break"></div>
                
                    <section id="indicador7" class="my-3">
                        <h1 class="indicador">Indicador 7: Flexibilidade e abertura</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item7 ?></p>                    
                    </section>
                
                    <section id="indicador8" class="my-3">
                        <h1 class="indicador">Indicador 8: Integração</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item8 ?></p>                    
                    </section>
                
                    <section id="indicador9" class="my-3">
                        <h1 class="indicador">Indicador 9: Permutabilidade</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item9 ?></p>                    
                    </section>
                
                    <section id="indicador10" class="my-3">
                        <h1 class="indicador">Indicador 10: Intervenção</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item10 ?></p>                    
                    </section>
                
                    <section id="indicador11" class="my-3">
                        <h1 class="indicador">Indicador 11: Bidirecionalidade</h1>
                        <h2 class="criterio">Critério escolhido:</h2>                    
                        <p><?php echo $questionario->questionario_item11 ?></p>                    
                    </section>
                </div>
                <form class="text-center mb-3" method="post" action="/relatorio/remover/{{$questionario->id}}" onsubmit="return confirm('Deseja excluir o Relatório do Item Digital {{$questionario->nome_item_digital_questionario}}?')">
                    @csrf
                    <button class="btn btn-danger px-4" type="submit">Excluir</button>
                </form>
            </div>
        </div>
        @endforeach 
    </div>

    <style>
        .page-break {
            page-break-after: always;
        }
        .indicador{
            font-size: 16px;
            font-weight: bold;
        }
        .criterio{
            font-size: 14px;
            font-weight: bold;
        }
        .cabecalho{
            font-weight: bold;
        }
    </style>

@endsection