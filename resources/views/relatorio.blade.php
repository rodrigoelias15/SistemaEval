
<body>    
    <p><span class="cabecalho"> Título do Item: </span> {{$questionario->nome_item_digital_questionario}} </p>
    <p><span class="cabecalho"> Nome do Avaliador: </span> {{$questionario->nome_avaliador_questionario}} </p>
    <p><span class="cabecalho"> Data da Avaliação: </span> {{ (new DateTime($questionario->data_item_digital_questionario))->format('d/m/Y')}} </p>

    <section id="indicador1">
        <h1 class="indicador" onclick="somaInteratividade()">Indicador 1: Textos e elementos gráficos</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item1 ?></p>                    
    </section>

    <section id="indicador2">
        <h1 class="indicador">Indicador 2: Espaço/meio de interação</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item2 ?></p>
    </section>

    <section id="indicador3">
        <h1 class="indicador">Indicador 3: Comportamento dos elementos no espaço</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item3 ?></p>                    
    </section>

    <section id="indicador4">
        <h1 class="indicador">Indicador 4: Movimento/liberdade do usuário no item</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item4 ?></p>                    
    </section>

    <section id="indicador5">
        <h1 class="indicador">Indicador 5: Suporte e feedback</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item5 ?></p>                    
    </section>

    <section id="indicador6">
        <h1 class="indicador">Indicador 6: Diálogo entre usuário e conteúdo</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item6 ?></p>                    
    </section>

    <div class="page-break"></div>

    <section id="indicador7">
        <h1 class="indicador">Indicador 7: Flexibilidade e abertura</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item7 ?></p>                    
    </section>

    <section id="indicador8">
        <h1 class="indicador">Indicador 8: Integração</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item8 ?></p>                    
    </section>

    <section id="indicador9">
        <h1 class="indicador">Indicador 9: Permutabilidade</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item9 ?></p>                    
    </section>

    <section id="indicador10">
        <h1 class="indicador">Indicador 10: Intervenção</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item10 ?></p>                    
    </section>

    <section id="indicador11">
        <h1 class="indicador">Indicador 11: Bidirecionalidade</h1>
        <h2 class="criterio">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item11 ?></p>                    
    </section>
</body>

<style>
    .page-break {
        page-break-after: always;
    }
    .indicador{
        font-size: 16px;
    }
    .criterio{
        font-size: 14px;
    }
    .cabecalho{
        font-weight: bold;
    }
</style>