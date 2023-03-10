<script>
    @if(session()->has('mensagem'))
        Swal.fire({
            title: "O que deseja a seguir ?",
            showDenyButton: true,
            showCancelButton: true,
            cancelButtonText: 'Continuar Cadastrando',
            confirmButtonText: 'Cadastrar Item',
            denyButtonText: `Página Inicial`,
            toast: true,
        })
        .then((result) => {
            if (result['isConfirmed']){
            Swal.fire({
                title: "Redirecionando",
                timerProgressBar: true,
                type: "success",
                timer: 1500,
                didOpen: () => {Swal.showLoading()}
            })
            .then(function() {
                setTimeout(function () {
                window.location.href = "/cadastroitemdigital";
                }, 1000);
            });
            }
            else if (result['isDenied']){
            Swal.fire({
                title: "Redirecionando",
                timerProgressBar: true,
                type: "success",
                timer: 1500,
                didOpen: () => {Swal.showLoading()}
            })
            .then(function() {
                setTimeout(function () {
                window.location.href = "/home";
                }, 1000);
            });
            }
        });
    @endif
</script>