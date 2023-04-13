
<section class="form-group">
    <span>Indicador 4: Tempo</span>
    <x-svg-tooltip :message="$messages->q4mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade ">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input id="indicador4a"
                class="form-check-input"
                type="radio"
                name="questionario_item4"
                value="{{ $questoes->Q4A->question }}"
                required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador4a">
                {{ $questoes->Q4A->question }}
                <x-svg-tooltip :message="$messages->q4ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador4b"
                class="form-check-input"
                type="radio"
                name="questionario_item4"
                value="{{ $questoes->Q4B->question }}"
                required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador4b">
                {{ $questoes->Q4B->question }}
                <x-svg-tooltip :message="$messages->q4mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador4c"
                class="form-check-input"
                type="radio"
                name="questionario_item4"
                value="{{ $questoes->Q4C->question }}"
                required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador4c">
                {{ $questoes->Q4C->question }}
                <x-svg-tooltip :message="$messages->q4mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>