{{-- Relatório para download --}}

<?php

function converteImagemBase64($caminhoImagem)
{
    $string = file_get_contents($caminhoImagem);
    $dadosImagem = base64_encode($string);
    $uri = 'data:image/jpeg;base64,' . $dadosImagem;
    return $uri;
}

?>

<body>

    <img src="{{ converteImagemBase64('img/caedlogo.png') }}" alt="Logo">

    <h1 class="centraliza">Relatório de Avaliação do Item Digital</h1>

    <fieldset>
        <p><span class="cabecalho"> Item Digital: </span> {{ $dadosQuestionario->nome_item_digital_questionario }}
        </p>
        <p><span class="cabecalho"> Nome do Avaliador: </span> {{ $dadosQuestionario->nome_avaliador_questionario }}
        </p>
        <p><span class="cabecalho"> Data da Avaliação: </span>
            {{ (new DateTime($dadosQuestionario->data_item_digital_questionario))->format('d/m/Y') }} </p>
        <p><span class="cabecalho"> Nível de Interatividade: </span><span
                class="class_interatividade">{{ $dadosQuestionario->interatividade }}/3.00 </span></p>
        <span class="cabecalho"> Classificação da Interatividade: </span> <span class="class_interatividade">
            {{ $dadosQuestionario->classificacaoInteratividade }} </span>
    </fieldset>
    <fieldset>
        <section id="indicador1">
            <h1 class="indicador">Indicador 1: Textos e elementos gráficos</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item1; ?></span>
        </section>
    </fieldset>

    <fieldset>
        <section id="indicador2">
            <h1 class="indicador">Indicador 2: Espaço/meio de interação</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item2; ?></span>
        </section>
    </fieldset>

    <fieldset>
        <section id="indicador3">
            <h1 class="indicador">Indicador 3: Comportamento dos elementos no espaço</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item3; ?></span>
        </section>
    </fieldset>

    <fieldset>
        <section id="indicador4">
            <h1 class="indicador">Indicador 4: Tempo</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item4; ?></span>
        </section>
    </fieldset>

    <fieldset>
        <section id="indicador5">
            <h1 class="indicador">Indicador 5: Movimento/liberdade do usuário no item</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item5; ?></span>
        </section>
    </fieldset>

    <fieldset>
        <section id="indicador6">
            <h1 class="indicador">Indicador 6: Suporte e feedback</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item6; ?></span>
        </section>
    </fieldset>

    <fieldset>
        <section id="indicador7">
            <h1 class="indicador">Indicador 7: Diálogo entre usuários e conteúdo</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item7; ?></span>
        </section>
    </fieldset>

    <fieldset>
        <section id="indicador8">
            <h1 class="indicador">Indicador 8: Flexibilidade e Abertura</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item8; ?></span>
        </section>
    </fieldset>

    <fieldset>
        <section id="indicador9">
            <h1 class="indicador">Indicador 9: Integração Inter-áreas</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item9; ?></span>
        </section>
    </fieldset>
    
    <fieldset>
        <section id="indicador10">
            <h1 class="indicador">Indicador 10: Integração colaborativa</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item10; ?></span>
        </section>
    </fieldset>
    
    <div class="page-break"></div>
    
    <fieldset>
        <section id="indicador11">
            <h1 class="indicador">Indicador 11: Permutabilidade</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item11; ?></span>
        </section>
    </fieldset>

    <fieldset>
        <section id="indicador12">
            <h1 class="indicador">Indicador 12: Intervenção</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item12; ?></span>
        </section>
    </fieldset>

    <fieldset>
        <section id="indicador13">
            <h1 class="indicador">Indicador 13: Bidirecionalidade</h1>
            <h2 class="criterio">Critério escolhido:</h2>
            <span><?php echo $dadosQuestionario->questionario_item13; ?></span>
        </section>
    </fieldset>
</body>

<style>
    img {
        max-width: 20%;
    }

    .page-break {
        page-break-after: always;
    }

    .indicador {
        font-size: 16px;
    }

    .criterio {
        font-size: 14px;
    }

    .cabecalho {
        font-weight: bold;
    }

    .class_interatividade {
        color: red;
        font-weight: bold;
    }

    .centraliza {
        text-align: center
    }
</style>