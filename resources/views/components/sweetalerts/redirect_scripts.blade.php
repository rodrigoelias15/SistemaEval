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
    function redirecionaCadastroItem() {
        Swal.fire({
            template: '#form-confirmation',
            title: "Cadastrar um novo item ? Será aberto um formulário em uma nova página",
            toast: true,
            icon: "warning",
            showCancelButton: true,
        })
        .then((result) => {
            if (result['isConfirmed']){
                window.open("/cadastroitemdigital")
            } else {
            //additional run on cancel  functions can be done hear
            }
        });
    }
    function redirecionaCadastroAval() {
        Swal.fire({
            template: '#form-confirmation',
            title: "Cadastrar um novo avaliador ? Será aberto um formulário em uma nova página",
            toast: true,
            icon: "warning",
            showCancelButton: true,
        })
        .then((result) => {
            if (result['isConfirmed']){
                window.open("/cadastroavaliador")
            } else {
            //additional run on cancel  functions can be done hear
            }
        });
    }
</script>
