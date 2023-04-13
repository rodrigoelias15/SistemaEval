@props([
    'color' => 'black',
    'message' => "Hello World"
])

<style>
.question-btn{
    font-size: 0.8rem;
    padding: 0.1rem 0.2rem;
    background: linear-gradient(to bottom, #ffffff, #d6e7ea);
    color: #333333;
    box-shadow: 0 0.1rem 0 #78a4a8;
}
.question-btn:hover{
    background: linear-gradient(to bottom, #d6e7ea, #ffffff);
    color: #333333;
    box-shadow: 0 0.1rem 0 #5c7d80;
}
</style>

<div class="btn btn-sm btn-danger question-btn"
    onClick="ajudaQuestionario('{{ $message }}')"
    fill="{{ $color }}">
    <span class="fa fa-question"></span>
</div>
