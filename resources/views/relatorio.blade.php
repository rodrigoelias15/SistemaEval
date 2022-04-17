
<body>  

    {{-- Script de interatividade --}}
        <script defer src="js/interatividade.js"></script> {{-- script baixado durante carregamento mas só executado depois de carregada a página (é adiado) --}}

    <p><span style="font-weight: bold"> Título do Item: </span> {{$questionario->nome_item_digital_questionario}} </p>
    <p><span style="font-weight: bold"> Nome do Avaliador: </span> {{$questionario->nome_avaliador_questionario}} </p>
    <p><span style="font-weight: bold"> Data da Avaliação: </span> {{ (new DateTime($questionario->data_item_digital_questionario))->format('d/m/Y')}} </p>

    <section id="indicador1">
        <h1 style="font-size: 16px" onclick="somaInteratividade()">Indicador 1: Textos e elementos gráficos</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item1 ?></p>                    
    </section>

    <section id="indicador2">
        <h1 style="font-size: 16px">Indicador 2: Espaço/meio de interação</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item2 ?></p>
    </section>

    <section id="indicador3">
        <h1 style="font-size: 16px">Indicador 3: Comportamento dos elementos no espaço</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item3 ?></p>                    
    </section>

    <section id="indicador4">
        <h1 style="font-size: 16px">Indicador 4: Movimento/liberdade do usuário no item</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item4 ?></p>                    
    </section>

    <section id="indicador5">
        <h1 style="font-size: 16px">Indicador 5: Suporte e feedback</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item5 ?></p>                    
    </section>

    <section id="indicador6">
        <h1 style="font-size: 16px">Indicador 6: Diálogo entre usuário e conteúdo</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item6 ?></p>                    
    </section>

    <section id="indicador7">
        <h1 style="font-size: 16px">Indicador 7: Flexibilidade e abertura</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item7 ?></p>                    
    </section>

    <section id="indicador8">
        <h1 style="font-size: 16px">Indicador 8: Integração</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item8 ?></p>                    
    </section>

    <section id="indicador9">
        <h1 style="font-size: 16px">Indicador 9: Permutabilidade</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item9 ?></p>                    
    </section>

    <section id="indicador10">
        <h1 style="font-size: 16px">Indicador 10: Intervenção</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item10 ?></p>                    
    </section>

    <section id="indicador11">
        <h1 style="font-size: 16px">Indicador 11: Bidirecionalidade</h1>
        <h2 style="font-size: 14px">Critério escolhido:</h2>                    
        <p><?php echo $questionario->questionario_item11 ?></p>                    
    </section>
</body>
