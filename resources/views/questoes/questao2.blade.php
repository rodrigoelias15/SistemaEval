
<section class="form-group">
    <span>Indicador 2: Espaço/meio de interação</span>
    <x-svg-tooltip :message="$messages->q2mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q2A->id"
            name="questionario_item2"
            :value="$questoes->Q2A->question">
            <x-svg-tooltip :message="$messages->q2ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q2B->id"
            name="questionario_item2"
            :value="$questoes->Q2B->question">
            <x-svg-tooltip :message="$messages->q2mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q2C->id"
            name="questionario_item2"
            :value="$questoes->Q2C->question">
            <x-svg-tooltip :message="$messages->q2mc->message" color='green'/>
        </x-radio>
    </fieldset>
</section>