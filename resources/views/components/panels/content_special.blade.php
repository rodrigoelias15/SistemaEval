<style>
    .contentpanel {
        background-color: #FEF3C7;
        border-radius: 0.75rem;
        background-image: url(img/bluepanel.png);
        background-size: cover;
        background-attachment: fixed;
        margin-top: 4rem;
        padding: 1rem;
    }
</style>
<div class="row justify-content-center contentpanel">
    <div class="col-sm-12 col-md-16">
        {{ $slot }}
    </div>
</div>