<section class="form-group">
    <span>Indicador 9: Integração Inter-áreas</span>
    <x-svg-tooltip :message="$messages->q9mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q9A->id"
            name="questionario_item9"
            :value="$questoes->Q9A->question">
            <x-svg-tooltip :message="$messages->q9ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q9B->id"
            name="questionario_item9"
            :value="$questoes->Q9B->question">
            <x-svg-tooltip :message="$messages->q9mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q9C->id"
            name="questionario_item9"
            :value="$questoes->Q9C->question">
            <x-svg-tooltip :message="$messages->q9mc->message" color='green'/>
        </x-radio>
    </fieldset>
</section>