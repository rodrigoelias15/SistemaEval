<section class="form-group">
    <span>Indicador 11: Permutabilidade</span>
    <x-help :message="$messages->q11mq->message" color='green'/>
    <p>O Item Digital:</p>
    <fieldset class="indicador_interatividade">
        <legend>Critérios:</legend>
        <x-radio
            :id="$questoes->Q11A->id"
            name="questionario_item11"
            :value="$questoes->Q11A->question">
            <x-help :message="$messages->q11ma->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q11B->id"
            name="questionario_item11"
            :value="$questoes->Q11B->question">
            <x-help :message="$messages->q11mb->message" color='green'/>
        </x-radio>
        <x-radio
            :id="$questoes->Q11C->id"
            name="questionario_item11"
            :value="$questoes->Q11C->question">
            <x-help :message="$messages->q11mc->message" color='green'/>
            <input type="hidden" id="indicador11" name="indicador11">
        </x-radio>
    </fieldset>
</section>