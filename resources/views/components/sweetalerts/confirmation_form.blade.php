
<script>
    $('form').submit(function (e, params) {
    var localParams = params || {};
    if (!localParams.send) {
        e.preventDefault();
        Swal.fire({
            template: '#form-confirmation',
            toast: true,
            type: "warning",
            showCancelButton: true,
        })
        .then((result) => {
            if (result['isConfirmed']){
            $(e.currentTarget).trigger(e.type, { 'send': true });
            } else {
            //additional run on cancel  functions can be done hear
            }
        });
    }
    });
</script>
