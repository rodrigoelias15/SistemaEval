
<section class="form-group">
    <span>Indicador 3: Comportamento dos elementos no espaço</span>
    <x-svg-tooltip :message="$messages->q3mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade ">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q3A->id"
            name="questionario_item3"
            :value="$questoes->Q3A->question">
            <x-svg-tooltip :message="$messages->q3ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q3B->id"
            name="questionario_item3"
            :value="$questoes->Q3B->question">
            <x-svg-tooltip :message="$messages->q3mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q3C->id"
            name="questionario_item3"
            :value="$questoes->Q3C->question">
            <x-svg-tooltip :message="$messages->q3mc->message" color='green'/>
        </x-radio>
    </fieldset>
</section>