<section class="form-group">
    <span>Indicador 7: Diálogo entre usuários e conteúdo</span>
    <x-svg-tooltip :message="$messages->q7mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q7A->id"
            name="questionario_item7"
            :value="$questoes->Q7A->question">
            <x-svg-tooltip :message="$messages->q7ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q7B->id"
            name="questionario_item7"
            :value="$questoes->Q7B->question">
            <x-svg-tooltip :message="$messages->q7mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q7C->id"
            name="questionario_item7"
            :value="$questoes->Q7C->question">
            <x-svg-tooltip :message="$messages->q7mc->message" color='green'/>
        </x-radio>
    </fieldset>
</section>