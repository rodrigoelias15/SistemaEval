<style>
    .gridcontentpanel {
        background-color: #FEF3C7;
        border-radius: 0.75rem;
        background-image: url(img/bluepanel.png);
        background-size: cover;
        background-attachment: fixed;
        margin-top: 4rem;
        display: grid;
        grid-gap: 1rem;
        padding: 1rem;
    }
    @media(min-width: 800px) {
        .gridcontentpanel {
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: auto;
        }
    }
</style>
<div class="gridcontentpanel">
    {{ $slot }}
</div>