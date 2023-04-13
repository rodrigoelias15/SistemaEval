<section class="form-group">
    <span>Indicador 5: Movimento/liberdade do usuário no item</span>
    <x-svg-tooltip :message="$messages->q5mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input id="indicador5a" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão &quot;somente&quot; para frente e para trás por meio de uma sequência linear e pré-definida." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador5a">
                Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão "somente" para frente e para trás por meio de uma sequência linear e pré-definida.
                <x-svg-tooltip :message="$messages->q5ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador5b" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta possibilidade para que o usuário seja capaz de se mover de forma intuitiva no item/questão por meio de uma sequência não linear e pré-definida (Ex.: menus)." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador5b">
                Apresenta possibilidade para que o usuário seja capaz de se mover de forma intuitiva no item/questão por meio de uma sequência não linear e pré-definida (Ex.: menus).
                <x-svg-tooltip :message="$messages->q5mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador5c" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão de forma livre e autônoma." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador5c">
                Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão de forma livre e autônoma.
                <x-svg-tooltip :message="$messages->q5mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>