<section class="form-group">
    <span>Indicador 8: Flexibilidade e Abertura</span>
    <x-svg-tooltip :message="$messages->q8mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q8A->id"
            name="questionario_item8"
            :value="$questoes->Q8A->question">
            <x-svg-tooltip :message="$messages->q8ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q8B->id"
            name="questionario_item8"
            :value="$questoes->Q8B->question">
            <x-svg-tooltip :message="$messages->q8mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q8C->id"
            name="questionario_item8"
            :value="$questoes->Q8C->question">
            <x-svg-tooltip :message="$messages->q8mc->message" color='green'/>
        </x-radio>
    </fieldset>
</section>