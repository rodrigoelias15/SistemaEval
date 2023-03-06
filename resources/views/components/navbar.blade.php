<nav id="nav" class="navbar-expand-lg" style="font: 'Saira Semi Condensed', sans-serif;">
    <div class="nav left">
        <span class="gradient skew"><h1 class="logo un-skew"><a href="/home">Sistema E-VAL</a></h1></span>
        
        <button id="menu" class="btn-nav" type="button"
            data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
        ><span class="fas fa-bars"></span></button>
    </div>

    <div class="nav right collapse navbar-collapse" id="navbarNav">
        <a class="nav-link" href="#">
            <span class="nav-link-span">
                <span class="u-nav">Itens/Instituições</span>
            </span>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('cadastro_itemdigital')}}">Cadastrar Item Digital</a>
                <a class="dropdown-item" href="{{route('exibir_item_digital')}} ">Visualizar Itens Digitais</a>
                <a class="dropdown-item" href="{{route('cadastro_instituicao')}}">Cadastrar Instituição</a>
                <a class="dropdown-item" href="{{route('exibir_instituicao')}}">Visualizar Instituições</a>
            </div>
        </a>

        <a class="nav-link" href="{{route('pre_questionario')}}">
            <span class="nav-link-span">
                <span class="u-nav">Avaliar Item</span>
            </span>
        </a>

        <a class="nav-link" href="#">
            <span class="nav-link-span">
                <span class="u-nav">Avaliador</span>
            </span>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('cadastro_avaliador')}}">Cadastrar Avaliador</a>
                <a class="dropdown-item" href="{{route('exibir_avaliador')}}">Visualizar Avaliadores</a>
            </div>
        </a>

        <a class="nav-link" href="#">
            <span class="nav-link-span">
                <span class="u-nav">Relatórios</span>
            </span>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('relatorioOrdenadoNome')}}">Ordenados Por Nome</a>
                <a class="dropdown-item" href="{{route('relatorioOrdenadoData')}}">Ordenados Por Data</a>
            </div>
        </a>

        <a class="nav-link" href="/contatoadmin">
            <span class="nav-link-span">
                <span class="u-nav">Contato</span>
            </span>
        </a>

        <a class="nav-link" href="/sair" onclick="return confirm('Deseja sair do sistema?')">
            <span class="nav-link-span">
                <span class="u-nav">Sair</span>
            </span>
        </a>
    </div>
</nav>
