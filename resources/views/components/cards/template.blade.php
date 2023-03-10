<style>
    .cartao{
        background-image: linear-gradient(45deg, rgb(157, 166, 201), rgb(173, 229, 229));
        border-radius: 0.75rem;
        margin-bottom: 1rem;
        backdrop-filter: blur(0.48rem);
        box-shadow: 0.5rem 0.5rem 0.3rem 0.1rem rgba(0, 0, 255, .2);
        padding: 1rem;
    }
</style>

<div class="card py-6 px-5 cartao">
    {{$slot}}
</div>