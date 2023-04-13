<section class="form-group">
    <span>Indicador 12: Intervenção</span>
    <x-svg-tooltip :message="$messages->q12mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input id="indicador12a" class="form-check-input" type="radio" name="questionario_item12" value="O enunciado e respostas não promovem e/ou não interferência/manipulação do usuário no objeto/item, pois direcionam para caminhos únicos de resolução." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador12a">
                O enunciado e respostas não promovem e/ou não interferência/manipulação do usuário no objeto/item, pois direcionam para caminhos únicos de resolução.
                <x-svg-tooltip :message="$messages->q12ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador12b" class="form-check-input" type="radio" name="questionario_item12" value="O enunciado e respostas promovem e/ou favorecem pontualmente e de forma controlada e restrita a interferência/manipulação do usuário no objeto/item." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador12b">
                O enunciado e respostas promovem e/ou favorecem pontualmente e de forma controlada e restrita a interferência/manipulação do usuário no objeto/item.
                <x-svg-tooltip :message="$messages->q12mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador12c" class="form-check-input" type="radio" name="questionario_item12" value="O enunciado e/ou respostas promovem e/ou favorecem a interferência/manipulação do usuário no objeto/item, de modo a oferecer recursos e pistas para sua execução é construção." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador12c">
                O enunciado e/ou respostas promovem e/ou favorecem a interferência/manipulação do usuário no objeto/item, de modo a oferecer recursos e pistas para sua execução é construção.
                <x-svg-tooltip :message="$messages->q12mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>