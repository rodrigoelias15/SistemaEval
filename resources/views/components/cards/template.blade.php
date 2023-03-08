<style>
    .cartao{
        background-color: rgb(157, 166, 201, 0.2); 
        border-radius: 0.75rem;
        margin-bottom: 4rem;
        backdrop-filter: blur(0.48rem);
        box-shadow: 0.5rem 0.5rem 0.3rem 0.1rem rgba(0, 0, 255, .2);
    }
</style>

<div class="card py-6 px-5 cartao">
    <div class="mt-8 flex flex-col justify-between">
        {{$slot}}
    </div>
</div>