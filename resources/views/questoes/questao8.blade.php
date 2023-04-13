<section class="form-group">
    <span>Indicador 8: Flexibilidade e Abertura</span>
    <x-svg-tooltip :message="$messages->q8mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input id="indicador8a" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e as respostas não apresentam possibilidades/trilhas diversas e flexíveis, com sistemas/caminhos/pistas de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, não permitem o uso de mais do que um recurso para que se chegue à resposta esperada." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador8a">
                O enunciado e as respostas não apresentam possibilidades/trilhas diversas e flexíveis, com sistemas/caminhos/pistas de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, não permitem o uso de mais do que um recurso para que se chegue à resposta esperada.
                <x-svg-tooltip :message="$messages->q8ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador8b" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e as respostas apresentam pelo menos duas possibilidades/trilhas flexíveis, com algum(s) sistema/caminho/pista de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, permitem o uso de mais do que um recurso para que se chegue à resposta esperada." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador8b">
                O enunciado e as respostas apresentam pelo menos duas possibilidades/trilhas flexíveis, com algum(s) sistema/caminho/pista de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, permitem o uso de mais do que um recurso para que se chegue à resposta esperada.
                <x-svg-tooltip :message="$messages->q8mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador8c" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e respostas apresentam possibilidades/trilhas diversas e flexíveis, com múltiplos sistemas/caminhos/pistas de entrada e saídas ( experimentações, expressões e experiências muito flexíveis e abertas) para resolução do item, ou seja, permitem o uso de mais de vários recursos disponíveis (tecnológicos e pedagógicos para que se chegue à resposta esperada." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador8c">
                O enunciado e respostas apresentam possibilidades/trilhas diversas e flexíveis, com múltiplos sistemas/caminhos/pistas de entrada e saídas ( experimentações, expressões e experiências muito flexíveis e abertas) para resolução do item, ou seja, permitem o uso de mais de vários recursos disponíveis (tecnológicos e pedagógicos para que se chegue à resposta esperada.
                <x-svg-tooltip :message="$messages->q8mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>