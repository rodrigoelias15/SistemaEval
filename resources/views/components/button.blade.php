<style>
    button {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem; 
        padding-left: 2.5rem;
        padding-right: 2.5rem; 
        background-color: #1D4ED8; 
        color: #ffffff; 
        font-size: 0.75rem;
        line-height: 1rem; 
        font-weight: 600; 
        text-transform: uppercase; 
        border-radius: 1rem;
        border-style: outset;
        border-color: #1D4ED8; 
    }
    button:hover{
        background-color: #1E3A8A;
    }
</style>

<div class="form-group text-center">
    <button type="submit" class="py-2 w-50 my-3">
        {{ $slot }}
    </button>
</div>