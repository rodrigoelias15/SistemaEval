<script>
    function redirecionaCadastroInst() {
        Swal.fire({
            template: '#form-confirmation',
            title: "Cadastrar uma nova instituição ? Será aberto um formulário em uma nova página",
            toast: true,
            icon: "warning",
            showCancelButton: true,
        })
        .then((result) => {
            if (result['isConfirmed']){
                window.open("/cadastroinstituicao")
            } else {
            //additional run on cancel  functions can be done hear
            }
        });
    }
</script>
