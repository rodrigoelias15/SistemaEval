@props(['dadosQuestionario'])

<div class="logocontainer col-lg-12 d-flex">
    <x-icons.logo />

    <div class="titulo">
        <span>
            <i>e-VAL </i><span class="fa fa-cube"></span><br />
            Avaliação de interatividade em itens digitais
        </span>
    </div>

</div>

<div class="infocontainer col-lg-12 d-flex">
    <span class="info_quest col-4">
        <b>Título do Item:</b> {{$dadosQuestionario->nome_item_digital_questionario}}
    </span>
    <span class="info_quest col-4">
        <b>Nome do Avaliador:</b> {{$dadosQuestionario->nome_avaliador_questionario}}
    </span>
    <span class="info_quest col-4">
        <b>Data da Avaliação:</b> {{ (new DateTime($dadosQuestionario->data_item_digital_questionario))->format('d/m/Y')}}
    </span>
</div>

<style>

    .logocontainer, .infocontainer {
        background-image: linear-gradient(45deg, rgb(157, 166, 201), rgb(173, 229, 229));
        border-radius: 0.75rem;
        margin-bottom: 1rem;
        backdrop-filter: blur(0.48rem);
        box-shadow: 0.5rem 0.5rem 0.3rem 0.1rem rgba(0, 0, 255, .2);
        padding: 0.5rem;
    }

    .info_quest {    
        border-style: solid;
        border-width: 0rem 0.1rem;
        border-color: #000 !important;
    }

    .titulo {
        width: 100%;
        text-align: center;
        padding: 0.5rem;
    }

    .titulo span {
        font-weight: bold;
        font-family: "Saira Semi Condensed", sans-serif !important;
    }

</style>