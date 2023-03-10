<script>
    @if(!session()->has('mensagem'))
        Swal.fire({
            background: "#FCD34D",
            icon: "info",
            iconColor: "#101728",
            color: '#101728',
            width: '25 rem',
            title: "Preencha o form a seguir para efetuar o cadastro",
            html: "<b>As questões com * são obrigatórias de serem respondidas</b>",
            confirmButtonText: "Entendi, vamos preencher !",
            confirmButtonColor: "#101728",
            backdrop: `rgba(0,0,0,0.4)`,
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        });
    @endif
</script>