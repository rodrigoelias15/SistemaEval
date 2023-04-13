
<section class="form-group">
    <span>Indicador 4: Tempo</span>
    <x-help :message="$messages->q4mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade ">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q4A->id"
            name="questionario_item4"
            :value="$questoes->Q4A->question">
            <x-help :message="$messages->q4ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q4B->id"
            name="questionario_item4"
            :value="$questoes->Q4B->question">
            <x-help :message="$messages->q4mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q4C->id"
            name="questionario_item4"
            :value="$questoes->Q4C->question">
            <x-help :message="$messages->q4mc->message" color='green'/>
        </x-radio>
    </fieldset>
</section>