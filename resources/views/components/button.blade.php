<style>
    .menubutton {
        color: #101728;
        border-radius: 1rem;
        background-image: linear-gradient(to right, #f37335 0%, #F09819  51%, #FF512F  100%);
        text-transform: uppercase;
        text-align: center;
        transition: 0.5s;
        background-size: 200% auto;
        box-shadow: 0 0 1rem #eee;
    }
    .menubutton:hover{
        background-position: right center; /* change the direction of the change here */
        color: #fff;
    }
</style>   
         
<div class="form-group text-center">
    <button class="menubutton btn btn-danger mt-2 px-4" type="submit" style="width:80%">
        {{ $slot }}
    </button>
</div>