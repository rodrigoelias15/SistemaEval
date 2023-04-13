<section class="form-group">
    <span>Indicador 10: Integração Colaborativa</span>
    <x-help :message="$messages->q10mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>


        <x-radio
            :id="$questoes->Q10A->id"
            name="questionario_item10"
            :value="$questoes->Q10A->question">
            <x-help :message="$messages->q10ma->message" color='green'/>
        </x-radio>

        <x-radio
            :id="$questoes->Q10B->id"
            name="questionario_item10"
            :value="$questoes->Q10B->question">
            <x-help :message="$messages->q10mb->message" color='green'/>
        </x-radio>

        <x-radio
            :id="$questoes->Q10C->id"
            name="questionario_item10"
            :value="$questoes->Q10C->question">
            <x-help :message="$messages->q10mc->message" color='green'/>
        </x-radio>

    </fieldset>
</section>