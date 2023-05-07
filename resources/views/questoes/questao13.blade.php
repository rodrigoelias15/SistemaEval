<section class="form-group">
    <span>Indicador 13: Bidirecionalidade</span>
    <x-help :message="$messages->q13mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>

        <x-radio
            :id="$questoes->Q13A->id"
            name="questionario_item13"
            :value="$questoes->Q13A->question">
            <x-help :message="$messages->q13ma->message" color='green'/>
        </x-radio>

        <x-radio
            :id="$questoes->Q13B->id"
            name="questionario_item13"
            :value="$questoes->Q13B->question">
            <x-help :message="$messages->q13mb->message" color='green'/>
        </x-radio>

        <x-radio
            :id="$questoes->Q13C->id"
            name="questionario_item13"
            :value="$questoes->Q13C->question">
            <x-help :message="$messages->q13mc->message" color='green'/>
            <input type="hidden" id="indicador13" name="indicador13">
        </x-radio>

    </fieldset>
</section>