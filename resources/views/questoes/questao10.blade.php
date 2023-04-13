<section class="form-group">
    <span>Indicador 10: Integração Colaborativa</span>
    <x-svg-tooltip :message="$messages->q10mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input id="indicador10a" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e/ou respostas não possibilita(m) desenvolver ações coletivas e colaborativas para sua resolução, tampouco arquitetar percursos hipermidiáticos." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador10a">
                O enunciado e/ou respostas não possibilita(m) desenvolver ações coletivas e colaborativas para sua resolução, tampouco arquitetar percursos hipermidiáticos.
                <x-svg-tooltip :message="$messages->q10ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador10b" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e/ou respostas possibilitam ações por meio de consultas a banco de dados, promovendo pequenos e limitados percursos hipermidiáticos, ou seja, trilhas realizadas com os recursos disponíveis digitalmente." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador10b">
                O enunciado e/ou respostas possibilitam ações por meio de consultas a banco de dados, promovendo pequenos e limitados percursos hipermidiáticos, ou seja, trilhas realizadas com os recursos disponíveis digitalmente.
                <x-svg-tooltip :message="$messages->q10mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador10c" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e respostas promove(m) ações coletivas e colaborativas (entre usuários) e arquiteta percursos hipermidiáticos disponíveis para resolução do item." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador10c">
                O enunciado e respostas promove(m) ações coletivas e colaborativas (entre usuários) e arquiteta percursos hipermidiáticos disponíveis para resolução do item.
                <x-svg-tooltip :message="$messages->q10mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>