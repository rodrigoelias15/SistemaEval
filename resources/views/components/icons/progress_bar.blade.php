<style>
.barra_progresso{
	height: 1.5rem !important;
	margin: 0 auto;
    background: linear-gradient(to bottom, #ffffff, #d6e7ea);
    box-shadow: 0 0.2rem 0 #78a4a8;
}
#barraProgresso{
	font-weight: bold;
	background-color: #b72626 !important;
}
#barra :nth-child(2), #interatividade{
    font-size: x-large;
    color:#101728;
    text-transform: uppercase;
}
</style>

<div id="barra" class="transparencia">
    <div class="progress barra_progresso w-50 mb-2">
        <div id="barraProgresso" class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <span id="interatividade" class="justify-content-center row">
        <p id="count"></p>
        <p class="pr-3"> Nível de Interatividade: </p>
        <p id="classificacaoInteratividadeBarra" class="font-weight-bold"></p>
    </span>
</div>