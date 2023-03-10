<style>
    .menubutton {
        background-image: linear-gradient(45deg, #f37335, #fee140);
        color: #101728;
    }
</style>
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
                <x-button> Cadastrar </x-button>
            </a>
            <a href="/itemdigital">
                <x-button> Visualizar </x-button>
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
                <x-button> Cadastrar </x-button>
            </a>
            <a href="/exibirinstituicao">
                <x-button> Visualizar </x-button>
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
                <x-button> Cadastrar </x-button>
            </a>
            <a href="/avaliador">
                <x-button> Visualizar </x-button>
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
                <x-button> Avaliar </x-button>
            </a>
            <a href="/cadastroitemdigital">
                <x-button> Cadastre um item </x-button>
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
                <x-button> Por Nome </x-button>
            </a>
            <a href="/relatorio_ordenado_data">
                <x-button> Por Data </x-button>
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
                <x-button> Fale Conosco </x-button>
            </a>
        </footer>
    </x-cards.template>

    
</x-panels.gridcontent>

