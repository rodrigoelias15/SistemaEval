<section class="form-group">
    <span>Indicador 10: Integração Colaborativa</span>
    <x-svg-tooltip :message="$messages->q10mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>


        <x-radio
            :id="$questoes->Q10A->id"
            name="questionario_item10"
            :value="$questoes->Q10A->question">
            <x-svg-tooltip :message="$messages->q10ma->message" color='green'/>
        </x-radio>

        <x-radio
            :id="$questoes->Q10B->id"
            name="questionario_item10"
            :value="$questoes->Q10B->question">
            <x-svg-tooltip :message="$messages->q10mb->message" color='green'/>
        </x-radio>

        <x-radio
            :id="$questoes->Q10C->id"
            name="questionario_item10"
            :value="$questoes->Q10C->question">
            <x-svg-tooltip :message="$messages->q10mc->message" color='green'/>
        </x-radio>

    </fieldset>
</section>