<style>
    .menubutton {
        background-image: linear-gradient(45deg, #f37335, #fee140);
        color: #101728;
        border-radius: 1rem;
    }
</style>

<div class="form-group text-center">
    <button class="menubutton btn btn-danger mt-2 px-4" type="submit" style="width:80%">
        {{ $slot }}
    </button>
</div>