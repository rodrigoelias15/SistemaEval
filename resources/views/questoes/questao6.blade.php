<section class="form-group">
    <span>Indicador 6: Suporte e feedback</span>
    <x-help :message="$messages->q6mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q6A->id"
            name="questionario_item6"
            :value="$questoes->Q6A->question">
            <x-help :message="$messages->q6ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q6B->id"
            name="questionario_item6"
            :value="$questoes->Q6B->question">
            <x-help :message="$messages->q6mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q6C->id"
            name="questionario_item6"
            :value="$questoes->Q6C->question">
            <x-help :message="$messages->q6mc->message" color='green'/>
        </x-radio>
    </fieldset>
</section>