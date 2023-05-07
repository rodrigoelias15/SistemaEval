<section class="form-group">
    <span>Indicador 12: Intervenção</span>
    <x-help :message="$messages->q12mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>

        <x-radio
            :id="$questoes->Q12A->id"
            name="questionario_item12"
            :value="$questoes->Q12A->question">
            <x-help :message="$messages->q12ma->message" color='green'/>
        </x-radio>

        <x-radio
            :id="$questoes->Q12B->id"
            name="questionario_item12"
            :value="$questoes->Q12B->question">
            <x-help :message="$messages->q12mb->message" color='green'/>
        </x-radio>

        <x-radio
            :id="$questoes->Q12C->id"
            name="questionario_item12"
            :value="$questoes->Q12C->question">
            <x-help :message="$messages->q12mc->message" color='green'/>
            <input type="hidden" id="indicador12" name="indicador12">
        </x-radio>
    </fieldset>
</section>