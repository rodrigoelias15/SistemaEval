
<section class="form-group">
    <span>Indicador 1: Textos e elementos gráficos</span>
    <x-svg-tooltip :message="$messages->q1mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q1A->id"
            name="questionario_item1"
            :value="$questoes->Q1A->question">
            <x-svg-tooltip :message="$messages->q1ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q1B->id"
            name="questionario_item1"
            :value="$questoes->Q1B->question">
            <x-svg-tooltip :message="$messages->q1mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q1C->id"
            name="questionario_item1"
            :value="$questoes->Q1C->question">
            <x-svg-tooltip :message="$messages->q1mc->message" color='green'/>
        </x-radio>
    </fieldset>
</section>