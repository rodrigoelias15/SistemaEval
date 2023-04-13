<section class="form-group">
    <span>Indicador 5: Movimento/liberdade do usuário no item</span>
    <x-svg-tooltip :message="$messages->q5mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q5A->id"
            name="questionario_item5"
            :value="$questoes->Q5A->question">
            <x-svg-tooltip :message="$messages->q5ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q5B->id"
            name="questionario_item5"
            :value="$questoes->Q5B->question">
            <x-svg-tooltip :message="$messages->q5mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q5C->id"
            name="questionario_item5"
            :value="$questoes->Q5C->question">
            <x-svg-tooltip :message="$messages->q5mc->message" color='green'/>
        </x-radio>
    </fieldset>
</section>