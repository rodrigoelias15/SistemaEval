<style>
    .botao {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem; 
        padding-left: 2.5rem;
        padding-right: 2.5rem; 
        background-color: #FCD34D; 
        color: #000000; 
        font-size: 0.75rem;
        line-height: 1rem; 
        font-weight: 600; 
        text-transform: uppercase; 
        border-radius: 1rem;
        border-style: outset;
        border-color: #F57F17; 
        
    }
    .botao:hover{
        background-color: #F57F17;
    }
</style>

<div class="form-group text-center">
    <button type="submit" class="botao py-2 w-50 my-3">
        {{ $slot }}
    </button>
</div>