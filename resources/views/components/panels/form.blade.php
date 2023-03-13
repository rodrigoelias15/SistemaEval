<style>
    .formpanel {
        padding: 1.5rem; 
        background-color: rgb(157, 166, 201, 0.5); 
        border-radius: 0.75rem;
        margin-bottom: 4rem;
        backdrop-filter: blur(0.48rem);
        box-shadow: 0.5rem 0.5rem 0.3rem 0.1rem rgba(0, 0, 255, .2);
    }
</style>

<div class='formpanel'>
    {{ $slot }}
</div>