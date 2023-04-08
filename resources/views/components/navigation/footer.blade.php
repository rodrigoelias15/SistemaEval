<style>
    /* The actual popup (appears on top) */
    .team .teamtext {
        visibility: hidden;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 1rem;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -7rem;
    }

    /* Toggle this class when clicking on the team container (hide and show the team) */
    .team .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s
    }

</style>

<footer id="foot-wrapper">
    <section id="foot">
        <div class="foot left team" onmouseover="revealPopup()">
            <span class="gradient2 skew">
                <h1 class="logo un-skew">
                    <span>Equipe</span>
                    <span class="fa fa-people-group"></span>
                </h1>
                <span class="teamtext un-skew" id="myteam">
                    Liamara Scortegagna <br/> (CAEd/UFJF) <br/>
                    Adriana Rocha Bruno <br/>(CAEd/UNIRIO) <br/>
                    Rodrigo Oliveira Elias <br/>(UFJF) <br/>
                    Alexandre Vitor S. Braga <br/>(UFJF) <br/>
                </span>
            </span>
        </div> 

        <div class="foot right">
            <a class="foot-link" href="https://institucional.caeddigital.net/">
                <span class="foot-link-span">
                Projeto de Pesquisa financiado pelo <br/>
                Centro de Políticas Públicas e Avaliação <br/>
                da Educação da Universidade Federal <br/>
                de Juiz de Fora (CAEd/UFJF) <br>
                </span>
            </a>
        </div>
    </section>
</footer>

<script>
    function revealPopup() {
        var team = document.getElementById("myteam");
        team.classList.toggle("show");
    }
</script>