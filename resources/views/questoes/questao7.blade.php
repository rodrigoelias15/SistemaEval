<section class="form-group">
    <span>Indicador 7: Diálogo entre usuários e conteúdo</span>
    <x-svg-tooltip :message="$messages->q7mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input id="indicador7a" class="form-check-input" type="radio" name="questionario_item7" value="Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item avaliativo numa
            sequência linear e pré-definida." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador7a">
                Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item avaliativo numa sequência linear e pré-definida.
                <x-svg-tooltip :message="$messages->q7ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador7b" class="form-check-input" type="radio" name="questionario_item7" value="Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item do processo avaliativos numa sequência não linear." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador7b">
                Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item do processo avaliativos numa sequência não linear.
                <x-svg-tooltip :message="$messages->q7mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador7c" class="form-check-input" type="radio" name="questionario_item7" value="As escolhas das ações do usuário determinam a sequência e a continuidade do processo avaliativo." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador7c">
                As escolhas das ações do usuário determinam a sequência e a continuidade do processo avaliativo.
                <x-svg-tooltip :message="$messages->q7mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>