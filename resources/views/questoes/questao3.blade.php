
<section class="form-group">
    <span>Indicador 3: Comportamento dos elementos no espaço</span>
    <x-svg-tooltip :message="$messages->q3mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade ">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input
                id="indicador3a"
                class="form-check-input"
                type="radio"
                name="questionario_item3"
                value="{{ $questoes->Q3A->question }}"
                required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador3a">
                {{ $questoes->Q3A->question }}
                <x-svg-tooltip :message="$messages->q3ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador3b"
                class="form-check-input"
                type="radio"
                name="questionario_item3"
                value="{{ $questoes->Q3B->question }}"
                required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador3b">
                {{ $questoes->Q3B->question }}
                <x-svg-tooltip :message="$messages->q3mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador3c"
                class="form-check-input"
                type="radio"
                name="questionario_item3"
                value="{{ $questoes->Q3C->question }}"
                required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador3c">
                {{ $questoes->Q3C->question }}
                <x-svg-tooltip :message="$messages->q3mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>