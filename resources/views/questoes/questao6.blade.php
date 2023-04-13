<section class="form-group">
    <span>Indicador 6: Suporte e feedback</span>
    <x-svg-tooltip :message="$messages->q6mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input id="indicador6a" class="form-check-input" type="radio" name="questionario_item6" value="Não apresenta opção de retorno/feedback ou ajuda." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador6a">
                Não apresenta opção de retorno/feedback ou ajuda.
                <x-svg-tooltip :message="$messages->q6ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador6b" class="form-check-input" type="radio" name="questionario_item6" value="Apresenta somente opção(ões) de retorno e/ou feedbacks." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador6b">
                Apresenta somente opção(ões) de retorno e/ou feedbacks.
                <x-svg-tooltip :message="$messages->q6mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador6c" class="form-check-input" type="radio" name="questionario_item6" value="Apresenta opção de retorno/feedback e ajuda." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador6c">
                Apresenta opção de retorno/feedback e ajuda.
                <x-svg-tooltip :message="$messages->q6mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>