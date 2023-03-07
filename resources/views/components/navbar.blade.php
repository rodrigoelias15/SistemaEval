<header id="nav-wrapper">
    <nav id="nav" class="navbar-expand-lg" style="font: 'Saira Semi Condensed', sans-serif;">
        <div class="nav left">
            <span class="gradient skew">
                <h1 class="logo un-skew">
                    <a href="/home">Sistema E-VAL</a>
                </h1>
            </span>
    
            <button id="menu" class="btn-nav" type="button"
                data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
            >
                <span class="fas fa-bars"></span>
            </button>
        </div>
    
        <div class="nav right collapse navbar-collapse" id="navbarNav">
            
            <ul class="navbar ulnav">
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" type="button" data-toggle="dropdown">
                        <span class="nav-link-span">
                            <span class="u-nav">Itens/Instituições</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right nav-menu">
                        <li>
                            <a class="dropdown-item nav-item" href="{{route('cadastro_itemdigital')}}">
                                <span class="nav-link-span">Cadastrar Item Digital</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-item" href="{{route('exibir_item_digital')}}">
                                <span class="nav-link-span">Visualizar Itens Digitais</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-item" href="{{route('cadastro_instituicao')}}">
                                <span class="nav-link-span">Cadastrar Instituição</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-item" href="{{route('exibir_instituicao')}}">
                                <span class="nav-link-span">Visualizar Instituições</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" href="{{route('pre_questionario')}}">
                        <span class="nav-link-span">
                            <span class="u-nav">Avaliar Item</span>
                        </span>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" type="button" data-toggle="dropdown">
                        <span class="nav-link-span">
                            <span class="u-nav">Avaliador</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right nav-menu">
                        <li>
                            <a class="dropdown-item nav-item" href="{{route('cadastro_avaliador')}}">
                                <span class="nav-link-span">Cadastrar Avaliador</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-item" href="{{route('exibir_avaliador')}}">
                                <span class="nav-link-span">Visualizar Avaliador</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" type="button" data-toggle="dropdown">
                        <span class="nav-link-span">
                            <span class="u-nav">Relatórios</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right nav-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item nav-item" href="{{route('relatorioOrdenadoNome')}}">
                                <span class="nav-link-span">Por Nome</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-item" href="{{route('relatorioOrdenadoData')}}">
                                <span class="nav-link-span">Por Data</span>
                            </a>                        
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" href="/contatoadmin">
                        <span class="nav-link-span">
                            <span class="u-nav">Contato</span>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="nav-link ultimonav" href="/sair" onclick="return confirm('Deseja sair do sistema?')">
                        <span class="nav-link-span">
                            <span class="u-nav">Sair</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        
    </nav>
</header>
