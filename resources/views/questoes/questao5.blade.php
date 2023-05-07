<section class="form-group">
    <span>Indicador 5: Movimento/liberdade do usuário no item</span>
    <x-help :message="$messages->q5mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q5A->id"
            name="questionario_item5"
            :value="$questoes->Q5A->question">
            <x-help :message="$messages->q5ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q5B->id"
            name="questionario_item5"
            :value="$questoes->Q5B->question">
            <x-help :message="$messages->q5mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q5C->id"
            name="questionario_item5"
            :value="$questoes->Q5C->question">
            <x-help :message="$messages->q5mc->message" color='green'/>
            <input type="hidden" id="indicador5" name="indicador5">
        </x-radio>
    </fieldset>
</section>