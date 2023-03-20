<style>
    .gridcontentpanel2 {
        background-color: #FEF3C7;
        border-radius: 0.75rem;
        background-image: url(img/bluepanel.png);
        background-size: cover;
        background-attachment: fixed;
        margin-top: 4rem;
        display: grid;
        grid-gap: 1rem;
        padding: 1rem;
        grid-auto-rows: auto;
    }
</style>
<div class="gridcontentpanel2">
    {{ $slot }}
</div>