<x-panels.gridcontent>

    <x-cards.template>
        <header>
            <div class="mt-4">
                <h1 class="text-3xl card-title"> Itens
                    <span class="fa fa-scroll"></span>
                </h1>
            </div>
        </header>

        <div class="card-body text-sm mt-2 space-y-4">
            <p>Cadastre e administre seus <strong>itens digitais</strong></p>
        </div>

        <footer>
            <a href="/cadastroitemdigital">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Cadastrar</span>
                </button>
            </a>
            <a href="/itemdigital">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Visualizar</span>
                </button>
            </a>
        </footer>
    </x-cards.template>

    <x-cards.template>
        <header>
            <div class="mt-4">
                <h1 class="text-3xl card-title"> Instituições
                    <span class="fa fa-building-columns"></span>
                </h1>
            </div>
        </header>

        <div class="card-body text-sm mt-2 space-y-4">
            <p>Cadastre e administre suas <strong>instituições</strong></p>
        </div>

        <footer>
            <a href="/cadastroinstituicao">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Cadastrar</span>
                </button>
            </a>
            <a href="/exibirinstituicao">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Visualizar</span>
                </button>
            </a>
        </footer>
    </x-cards.template>

    <x-cards.template>
        <header>
            <div class="mt-4">
                <h1 class="text-3xl card-title"> Avaliadores
                    <span class="fa fa-person-chalkboard"></span>
                </h1>
            </div>
        </header>

        <div class="card-body text-sm mt-2 space-y-4">
            <p>Cadastre e administre seus <strong>avaliadores</strong></p>
        </div>

        <footer>
            <a href="/cadastroavaliador">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Cadastrar</span>
                </button>
            </a>
            <a href="/avaliador">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Visualizar</span>
                </button>
            </a>
        </footer>
    </x-cards.template>

    <x-cards.template>
        <header>
            <div class="mt-4">
                <h1 class="text-3xl card-title"> Avaliar Item
                    <span class="fa fa-list-check"></span>
                </h1>
            </div>
        </header>

        <div class="card-body text-sm mt-2 space-y-4">
            <p>Avalie seus itens cadastrados no sistema</p>
        </div>

        <footer>
            <a href="/prequestionario">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Avaliar</span>
                </button>
            </a>
            <a href="/cadastroitemdigital">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Cadastre um Item</span>
                </button>
            </a>
        </footer>
    </x-cards.template>

    <x-cards.template>
        <header>
            <div class="mt-4">
                <h1 class="text-3xl card-title"> Relatórios
                    <span class="fa fa-file-lines"></span>
                </h1>
            </div>
        </header>

        <div class="card-body text-sm mt-2 space-y-4">
            <p>Gere relatórios dos itens avaliados</p>
        </div>

        <footer>
            <a href="/relatorio_ordenado_nome">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Por Nome</span>
                </button>
            </a>
            <a href="/relatorio_ordenado_data">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Por Data</span>
                </button>
            </a>
        </footer>
    </x-cards.template>

    <x-cards.template>
        <header>
            <div class="mt-4">
                <h1 class="text-3xl card-title"> Contato
                    <span class="fa fa-gear"></span>
                </h1>
            </div>
        </header>

        <div class="card-body text-sm mt-2 space-y-4">
            <p>Tem alguma dúvida ? Entre em contato com a administração do sistema</p>
        </div>

        <footer>
            <a href="/contatoadmin">
                <button class="btn btn-danger mt-2 px-4" type="submit" style="width:100%">
                    <span>Fale conosco</span>
                </button>
            </a>
        </footer>
    </x-cards.template>

    
</x-panels.gridcontent>

