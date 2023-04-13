<section class="form-group">
    <span>Indicador 11: Permutabilidade</span>
    <x-svg-tooltip :message="$messages->q11mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <div class="form-group form-check">
            <input id="indicador11a" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e/ou respostas não criam possibilidades de conectividade, nem multidisciplinaridade. Não traz(em) experiências de modo a se desdobrar/promover conexões/ligações mais amplas e complexas, ligadas, explicitamente, ao cotidiano." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador11a">
                O enunciado e/ou respostas não criam possibilidades de conectividade, nem multidisciplinaridade. Não traz(em) experiências de modo a se desdobrar/promover conexões/ligações mais amplas e complexas, ligadas, explicitamente, ao cotidiano.
                <x-svg-tooltip :message="$messages->q11ma->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador11b" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e/ou respostas criam possibilidades de conectividade, de associações e simulações, mas sem relações multidisciplinares. Experiências mais amplas e complexas, como aquelas vivenciadas no cotidiano e que careçam de conhecimentos de áreas diversas cujas resoluções necessitem dessas ligações, são desprezadas, pois o foco são conexões mais simples, mais óbvias, objetivas e menos reflexivas." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador11b">
                O enunciado e/ou respostas criam possibilidades de conectividade, de associações e simulações, mas sem relações multidisciplinares. Experiências mais amplas e complexas, como aquelas vivenciadas no cotidiano e que careçam de conhecimentos de áreas diversas cujas resoluções necessitem dessas ligações, são desprezadas, pois o foco são conexões mais simples, mais óbvias, objetivas e menos reflexivas.
                <x-svg-tooltip :message="$messages->q11mb->message" color='green'/>
            </label>
        </div>

        <div class="form-group form-check">
            <input id="indicador11c" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e respostas apresentam associações, por meio de simulações ou propostas cotidianas, e com forte apelo à conectividade, ou seja, há a interligação de temas, de experiências/experimentos, de modo a se desdobrar, multidisciplinarmente, em outras conexões/ligações." required onclick="exibeNivelInteratividade()">
            <label class="form-check-label" for="indicador11c">
                O enunciado e respostas apresentam associações, por meio de simulações ou propostas cotidianas, e com forte apelo à conectividade, ou seja, há a interligação de temas, de experiências/experimentos, de modo a se desdobrar, multidisciplinarmente, em outras conexões/ligações.
                <x-svg-tooltip :message="$messages->q11mc->message" color='green'/>
            </label>
        </div>
    </fieldset>
</section>