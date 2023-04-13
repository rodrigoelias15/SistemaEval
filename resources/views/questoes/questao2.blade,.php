
<section class="form-group">
    <span>Indicador 2: Espaço/meio de interação</span>
    <x-svg-tooltip :message="$messages->q2mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input id="indicador2a"
                class="form-check-input"
                type="radio"
                name="questionario_item2"
                value="{{ $questoes->Q2A->question }}"
                required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador2a">
                {{ $questoes->Q2A->question }}
                <x-svg-tooltip :message="$messages->q2ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador2b"
                class="form-check-input"
                type="radio"
                name="questionario_item2"
                value="{{ $questoes->Q2B->question }}"
                required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador2b">
                {{ $questoes->Q2B->question }}
                <x-svg-tooltip :message="$messages->q2mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador2c"
                class="form-check-input"
                type="radio"
                name="questionario_item2"
                value="{{ $questoes->Q2C->question }}"
                required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador2c">
                {{ $questoes->Q2C->question }}
                <x-svg-tooltip :message="$messages->q2mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>