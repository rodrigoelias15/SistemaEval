<section class="form-group">
    <span>Indicador 9: Integração Inter-áreas</span>
    <x-svg-tooltip :message="$messages->q9mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input id="indicador9a" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e respostas não apresentam elos de ligação e/ou articulação entre áreas do conhecimento ou entre conhecimentos da mesma área." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador9a">
                O enunciado e respostas não apresentam elos de ligação e/ou articulação entre áreas do conhecimento ou entre conhecimentos da mesma área.
                <x-svg-tooltip :message="$messages->q9ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador9b" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e respostas apresentam, sutilmente, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador9b">
                O enunciado e respostas apresentam, sutilmente, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área.
                <x-svg-tooltip :message="$messages->q9mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador9c" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e/ou respostas criam, de forma explícita, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador9c">
                O enunciado e/ou respostas criam, de forma explícita, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área.
                <x-svg-tooltip :message="$messages->q9mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>