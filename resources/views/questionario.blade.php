@extends('layouts.layout')

@section('titulo_pagina')
Questionário de Interatividade
@endsection

@section('content')

{{-- Script de interatividade --}}
<script defer src="js/interatividade.js"></script> {{-- script baixado durante carregamento mas só executado depois de carregada a página (é adiado) --}}

@if ($errors->any())
<div class="d-flex justify-content-center">
    <div class="alert alert-danger text-center col-md-6">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="row">
    <div class="cabecalho col-lg-12">

        @if ($errors->any()) 
        <div class="logo_titulo d-flex" style="margin-top: 0px">
        @else 
            <div class="logo_titulo d-flex">
        @endif
            <div class="logo justify-content-center d-flex flex-column">
                <img class="img-fluid" src="img/caedlogo.png" alt="Logo Caed">
            </div>
            <div class="titulo">
                <span>
                    <i>e-Val</i><br />
                    Avaliação de interatividade em itens digitais
                </span>
            </div>
        </div>

        <div class="row my-2">
            <span class="col-12">
                Título do Item: {{$questionario->nome_item_digital_questionario}}
            </span>
            <span class="col-12">
                Nome do Avaliador: {{$questionario->nome_avaliador_questionario}}
            </span>
            <span class="col-12">
                Data da Avaliação: {{ (new DateTime($questionario->data_item_digital_questionario))->format('d/m/Y')}}
            </span>
        </div>
    </div>

    <div class="col-lg-12 my-4">        
        
        <div class="progress barra_progresso w-50 mb-2">
            <div id="myBar" class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    {{-- Teste nível de interatividade --}}
        <span id="interatividade" class="justify-content-center row">
            <p id="count"></p>
            <p class="pr-3"> Nível de Interatividade: </p>
            <p id="nivel_interatividade" class="font-weight-bold"></p>
        </span>
    {{-- ---------------------------------- --}}

        <form id="form1" method="post" class="formulario">
            @csrf
            <section class="form-group">
                <span>Indicador 1: Textos e elementos gráficos</span>
                <i class="fa-regular fa-circle-question" title="O texto é composto por um conjunto de palavras que ajudam a fornecer aos alunos a quantidade certa de informações, ou seja, são as “interações” em forma de verbos (ação), que quando utilizadas de forma isolada ou com algum elemento gráfico (imagens, figuras, fotos etc), - ambos na forma estática - e/ou com sons e/ou vídeos, a interatividade é considerada baixa. Porém, quando combinadas com outros elementos gráficos, como, imagens (figuras, fotos etc) dinâmicas ou tipografias dinâmicas (mistura de técnicas de animação com texto e/ou imagens, que resultam em vídeos) ou ainda, vídeos e sons interativos (que permitem a interação do usuário), animações e simulações, o nível de interatividade aumenta consideravelmente."></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador1a" class="form-check-input" type="radio" name="questionario_item1" value="Apresenta textos e/ou elementos gráficos estáticos (figuras e fotos) em seu enunciado, respostas e informações adicionais." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador1a">
                            Apresenta textos e/ou elementos gráficos estáticos (figuras e fotos) em seu enunciado, respostas e informações adicionais. 
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador1b" class="form-check-input" type="radio" name="questionario_item1" value="Apresenta textos e/ou elementos gráficos no formato de mídias como, figuras, fotos vídeos e/ou sons com algum tipo de animação." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador1b">
                            Apresenta textos e/ou elementos gráficos no formato de mídias como, figuras, fotos vídeos e/ou sons com algum tipo de animação. 
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador1c" class="form-check-input" type="radio" name="questionario_item1" value="Apresenta textos e/ou elementos gráficos no formato de vídeos e/ou sons interativos, animações, imagens (figuras, fotos etc) dinâmicas, simuladores etc, em seu enunciado, respostas e informações adicionais." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador1c">
                            Apresenta textos e/ou elementos gráficos no formato de vídeos e/ou sons interativos, animações, imagens (figuras, fotos etc) dinâmicas, simuladores etc, em seu enunciado, respostas e informações adicionais.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 2: Espaço/meio de interação</span>
                <i class="fa-regular fa-circle-question" title="Refere-se ao meio/espaço com o qual, ou dentro do qual, os alunos interagem com o item - por exemplo, um notebook/computador via mouse um smartphone ou telas touch screen através dos dedos ou canetas específicas conseguem interagir com o item digital. Apresentam ações e comandos tecnológicos que podem ser inseridos juntamente com os elementos “palavras” como: clicar, selecionar e arrastar, manipular, desenhar etc, e desta forma, transformam um simples texto ou imagem estática em ações interativas."></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador2a" class="form-check-input" type="radio" name="questionario_item2" value="Apresenta possibilidade para que o aluno interfira na questão/resposta apenas com a opção 'clicar' com auxílio, por exemplo, de mouse ou touch screen." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador2a">
                            Apresenta possibilidade para que o aluno interfira na questão/resposta apenas com a opção 'clicar' com auxílio, por exemplo, de mouse ou touch screen.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador2b" class="form-check-input" type="radio" name="questionario_item2" value="Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen" onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador2b">
                            Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen.
                        </label>
                    </div>

                    <div class="form-group form-check">
                       <input id="indicador2c" class="form-check-input" type="radio" name="questionario_item2" value="Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen e a utilização de recursos como, por exemplo, calculadora, bloco de anotações, acesso a links de informações adicionais, espaço para experimentação, simulação etc." onclick="exibeNivelInteratividade()">
                       <label class="form-check-label" for="indicador2c">
                           Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen e a utilização de recursos como, por exemplo, calculadora, bloco de anotações, acesso a links de informações adicionais, espaço para experimentação, simulação etc.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 3: Comportamento dos elementos no espaço</span>
                <i class="fa-regular fa-circle-question" title="O comportamento é o elemento que se preocupa com a forma como ocorrem as interações do usuário com a interface digital, por exemplo, como os usuários podem executar ações (clicar, escrever, selecionar e arrastar, manipular, desenhar, simular etc.) para responder um item. Em relação ao nível de interatividade é possível afirmar que quanto &quot;mais ações&quot; do usuário com a interface digital do item, maior será a interatividade tecnológica. Assim, ele pode variar do nível mais baixo para o nível mais alto de interatividade."></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade ">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador3a" class="form-check-input" type="radio" name="questionario_item3" value="Não apresenta orientações para o usuário de como percorrer para desenvolver a questão." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador3a">
                            Não apresenta orientações para o usuário de como percorrer para desenvolver a questão.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador3b" class="form-check-input" type="radio" name="questionario_item3" value="Apresenta orientações para o usuário de como percorrer para desenvolver a questão apenas no formato texto (enunciado)." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador3b">
                            Apresenta orientações para o usuário de como percorrer para desenvolver a questão apenas no formato texto (enunciado).
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador3c" class="form-check-input" type="radio" name="questionario_item3" value="Apresenta orientações para o usuário de como percorrer para desenvolver a questão de forma explícita (textual, elementos gráficos ou audiovisual)." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador3c">
                            Apresenta orientações para o usuário de como percorrer para desenvolver a questão de forma explícita (textual, elementos gráficos ou audiovisual).
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 4: Tempo</span>
                <i class="fa-regular fa-circle-question" title="Tempo: É o elemento que se refere às mídias que mudam a partir de um determinado tempo - ação e reação. Por exemplo, a partir da &quot;acão&quot; do aluno como, clicar na opção &quot;iniciar&quot; numa mídia utilizada (vídeo, som, imagem animada etc), esta apresenta uma “reação”, ou seja, uma mensagem de texto, som, imagem etc., com novas instruções como, por exemplo, para que o aluno faça uma simulação, porém com um &quot;determinado tempo&quot; para responder o item digital. A reação possui um &quot;tempo de duração&quot; e, este elemento quando tecnologicamente aplicado em itens digitais e combinados, principalmente, com possibilidade da inclusão de animações e simulações, apresenta alto nível de interatividade"></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade ">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador4a" class="form-check-input" type="radio" name="questionario_item4" value="Apresenta ações em textos e/ou elementos gráficos estáticos &quot;sem&quot; determinação de tempo para execução." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador4a">
                            Apresenta ações em textos e/ou elementos gráficos estáticos "sem" determinação de tempo para execução.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador4b" class="form-check-input" type="radio" name="questionario_item4" value="Apresenta ações em mídias como vídeos, vídeos interativos e animações &quot;sem&quot; determinação de tempo para execução." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador4b">
                            Apresenta ações em mídias como vídeos, vídeos interativos e animações "sem" determinação de tempo
                            para execução.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador4c" class="form-check-input" type="radio" name="questionario_item4" value="Apresenta ações em mídias como vídeos, vídeos
                        interativos, animações, simuladores etc, &quot;com&quot; determinação de tempo para execução." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador4c">
                            Apresenta ações em mídias como vídeos, vídeos interativos, animações, simuladores etc, "com" determinação de tempo para execução.
                        </label>
                    </div>
                </fieldset>
            </section>

            <section class="form-group">
                <span>Indicador 5: Movimento/liberdade do usuário no item</span>
                <i class="fa-regular fa-circle-question" title="Movimento/liberdade do usuário no item: é o elemento que se refere a liberdade do usuário em se movimentar no item/questão. A interatividade é menor quando, por exemplo, o usuário é capaz de se mover somente para frente ou para trás através de uma sequência linear predeterminada no item/questão. Esse tipo de movimento, muitas vezes é chamado de virada de página eletrônica e não fornece feedback específico de resposta ao usuário, mas simplesmente fornece acesso à próxima ou a anterior exibição em uma sequência linear."></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador5a" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão &quot;somente&quot; para frente e para trás por meio de uma sequência linear e pré-definida." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador5a">
                            Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão "somente" para frente e para trás por meio de uma sequência linear e pré-definida.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador5b" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta possibilidade para que o usuário seja capaz de se mover de forma intuitiva no item/questão por meio de uma sequência não linear e pré-definida (Ex.: menus)." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador5b">
                            Apresenta possibilidade para que o usuário seja capaz de se mover de forma intuitiva no item/questão por meio de uma sequência não linear e pré-definida (Ex.: menus).
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador5c" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão de forma livre e autônoma." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador5c">
                            Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão de forma livre e autônoma.
                        </label>
                    </div>
                </fieldset>
            </section>

            <section class="form-group">
                <span>Indicador 6: Suporte e feedback</span>
                <i class="fa-regular fa-circle-question" title="O Suporte e feedback são retornos fornecidos pelo sistema de avaliação ao usuário e pode variar desde simples mensagens de alerta ou estímulo até opções de ajuda com orientações de como resolver o item a partir de explicações e/ou sistemas tutoriais. Como por exemplo, o usuário executa algum comando e conforme o resultado, é apresentado a ele um feedback/mensagem no formato de texto, imagem ou som ou ainda, opção de ajuda com orientações de como resolver a questão."></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador6a" class="form-check-input" type="radio" name="questionario_item6" value="Não apresenta opção de retorno/feedback ou ajuda." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador6a">
                            Não apresenta opção de retorno/feedback ou ajuda.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador6b" class="form-check-input" type="radio" name="questionario_item6" value="Apresenta somente opção(ões) de retorno e/ou feedbacks." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador6b">
                            Apresenta somente opção(ões) de retorno e/ou feedbacks.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador6c" class="form-check-input" type="radio" name="questionario_item6" value="Apresenta opção de retorno/feedback e ajuda." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador6c">
                            Apresenta opção de retorno/feedback e ajuda.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 7: Diálogo entre usuários e conteúdo</span>
                <i class="fa-regular fa-circle-question" title="Refere-se ao diálogo que ocorre entre o usuário e o conteúdo gerado pelo sistema digital de avaliação. O sistema fornece um item/questão ao qual o usuário deve responder e, a partir da resposta, o sistema apresenta novos itens/questões. Essa forma de interação vai desde o formato simples de perguntas e respostas até as mais complexas, que incorporam componentes de inteligência artificial, que baseados na resposta fornecida pelo usuário apresentam itens com maior ou menor nível de dificuldade, de forma não linear e nem pré-definida.
                Esse tipo de ação do sistema, normalmente é indistinguível para o usuário. No entanto, quanto maior a apresentação de novos itens baseados nas respostas do usuário, maior será o nível de interatividade."></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador7a" class="form-check-input" type="radio" name="questionario_item7" value="Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item avaliativo numa
                        sequência linear e pré-definida." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador7a">
                            Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item avaliativo numa sequência linear e pré-definida.
                        </label>
                    </div>

                    <div class="form-group form-check">
                        <input id="indicador7b" class="form-check-input" type="radio" name="questionario_item7" value="Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item do processo avaliativos numa sequência não linear." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador7b">
                            Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item do processo avaliativos numa sequência não linear.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador7c" class="form-check-input" type="radio" name="questionario_item7" value="As escolhas das ações do usuário determinam a sequência e a continuidade do processo avaliativo." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador7c">
                            As escolhas das ações do usuário determinam a sequência e a continuidade do processo avaliativo.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 8: Flexibilidade e Abertura</span>
                <i class="fa-regular fa-circle-question" title="Tanto o enunciado quanto as respostas se voltam para níveis de flexibilidade e de abertura. Isso significa, do ponto de vista da interatividade (foco do presente indicador, ou seja, mais ou menos interativo) identificar o quão flexível e aberto é o item. Entenda-se por entradas e saídas tanto as possibilidades de articulações entre conteúdos e áreas, quanto pistas para se encontrar respostas. O indicador flexibilidade e a abertura compreendem que o item quer ser resolvido, ou seja, não se pretende dificultar, mas oferecer múltiplas condições para sua resolução. Para tal, oferece mais ou menos condições para isso por meio de recursos diversos, tanto por meio do enunciado associado a recursos tecnológicos, quanto criando relações cotidianas, com outros conteúdos e/ou áreas para que o/a estudante possa trilhar seu percurso de respostas"></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador8a" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e as respostas não apresentam possibilidades/trilhas diversas e flexíveis, com sistemas/caminhos/pistas de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, não permitem o uso de mais do que um recurso para que se chegue à resposta esperada." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador8a">
                            O enunciado e as respostas não apresentam possibilidades/trilhas diversas e flexíveis, com sistemas/caminhos/pistas de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, não permitem o uso de mais do que um recurso para que se chegue à resposta esperada.
                        </label>
                    </div>

                    <div class="form-group form-check">
                        <input id="indicador8b" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e as respostas apresentam pelo menos duas possibilidades/trilhas flexíveis, com algum(s) sistema/caminho/pista de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, permitem o uso de mais do que um recurso para que se chegue à resposta esperada." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador8b">
                            O enunciado e as respostas apresentam pelo menos duas possibilidades/trilhas flexíveis, com algum(s) sistema/caminho/pista de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, permitem o uso de mais do que um recurso para que se chegue à resposta esperada.
                        </label>
                    </div>

                    <div class="form-group form-check">
                        <input id="indicador8c" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e respostas apresentam possibilidades/trilhas diversas e flexíveis, com múltiplos sistemas/caminhos/pistas de entrada e saídas ( experimentações, expressões e experiências muito flexíveis e abertas) para resolução do item, ou seja, permitem o uso de mais de vários recursos disponíveis (tecnológicos e pedagógicos para que se chegue à resposta esperada." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador8c">
                            O enunciado e respostas apresentam possibilidades/trilhas diversas e flexíveis, com múltiplos sistemas/caminhos/pistas de entrada e saídas ( experimentações, expressões e experiências muito flexíveis e abertas) para resolução do item, ou seja, permitem o uso de mais de vários recursos disponíveis (tecnológicos e pedagógicos para que se chegue à resposta esperada.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 9: Integração Inter-áreas</span>
                <i class="fa-regular fa-circle-question" title="Tanto o enunciado quanto as respostas se voltam para níveis de ligação e de articulação entre áreas do conhecimento ou entre conhecimentos da mesma área. Para tal, faz menção (direta ou indiretamente) a determinado conteúdo, atividade ou contexto. Quanto maior a relação explícita entre conhecimentos, mais pistas são oferecidas aos usuários para que se estabeleçam relações. Tais relações podem se dar tanto no enunciado, por meios de tecnologias diversas, como por exemplos charges, animações, simulações, quanto nas próprias opções de respostas, que podem trazer indícios das possíveis relações"></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador9a" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e respostas não apresentam elos de ligação e/ou articulação entre áreas do conhecimento ou entre conhecimentos da mesma área." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador9a">
                            O enunciado e respostas não apresentam elos de ligação e/ou articulação entre áreas do conhecimento ou entre conhecimentos da mesma área.
                        </label>
                    </div>

                    <div class="form-group form-check">
                        <input id="indicador9b" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e respostas apresentam, sutilmente, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador9b">
                            O enunciado e respostas apresentam, sutilmente, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador9c" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e/ou respostas criam, de forma explícita, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador9c">
                            O enunciado e/ou respostas criam, de forma explícita, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 10: Integração colaborativa</span>
                <i class="fa-regular fa-circle-question" title="Tanto o enunciado quanto as respostas se voltam para ações coletivas e/ou colaborativas, que podem se dar em parcerias entre usuários ou entre usuário(s) e recursos hipermidiáticos. Para tal, cria, por exemplo, problemas (casos) que precisam ser resolvidos em parceria com outros usuários ou por meio de pistas encontradas na web."></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador10a" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e/ou respostas não possibilita(m) desenvolver ações coletivas e colaborativas para sua resolução, tampouco arquitetar percursos hipermidiáticos." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador10a">
                            O enunciado e/ou respostas não possibilita(m) desenvolver ações coletivas e colaborativas para sua resolução, tampouco arquitetar percursos hipermidiáticos.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador10b" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e/ou respostas possibilitam ações por meio de consultas a banco de dados, promovendo pequenos e limitados percursos hipermidiáticos, ou seja, trilhas realizadas com os recursos disponíveis digitalmente." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador10b">
                            O enunciado e/ou respostas possibilitam ações por meio de consultas a banco de dados, promovendo pequenos e limitados percursos hipermidiáticos, ou seja, trilhas realizadas com os recursos disponíveis digitalmente.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador10c" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e respostas promove(m) ações coletivas e colaborativas (entre usuários) e arquiteta percursos hipermidiáticos disponíveis para resolução do item." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador10c">
                            O enunciado e respostas promove(m) ações coletivas e colaborativas (entre usuários) e arquiteta percursos hipermidiáticos disponíveis para resolução do item.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 11: Permutabilidade</span>
                <i class="fa-regular fa-circle-question" title="Tanto o enunciado quanto as respostas se voltam para conexões para além do que está dado, pois devem ser mais amplas e se dar por meio de relações multidisciplinares. Para tal, cria, por exemplo, situações advindas de experiências/experimentos, do cotidiano, que exigem relações inter-áreas, como o uso de simulações, a resolução de problemas práticos etc."></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador11a" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e/ou respostas não criam possibilidades de conectividade, nem multidisciplinaridade. Não traz(em) experiências de modo a se desdobrar/promover conexões/ligações mais amplas e complexas, ligadas, explicitamente, ao cotidiano." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador11a">
                            O enunciado e/ou respostas não criam possibilidades de conectividade, nem multidisciplinaridade. Não traz(em) experiências de modo a se desdobrar/promover conexões/ligações mais amplas e complexas, ligadas, explicitamente, ao cotidiano.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador11b" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e/ou respostas criam possibilidades de conectividade, de associações e simulações, mas sem relações multidisciplinares. Experiências mais amplas e complexas, como aquelas vivenciadas no cotidiano e que careçam de conhecimentos de áreas diversas cujas resoluções necessitem dessas ligações, são desprezadas, pois o foco são conexões mais simples, mais óbvias, objetivas e menos reflexivas." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador11b">
                            O enunciado e/ou respostas criam possibilidades de conectividade, de associações e simulações, mas sem relações multidisciplinares. Experiências mais amplas e complexas, como aquelas vivenciadas no cotidiano e que careçam de conhecimentos de áreas diversas cujas resoluções necessitem dessas ligações, são desprezadas, pois o foco são conexões mais simples, mais óbvias, objetivas e menos reflexivas.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador11c" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e respostas apresentam associações, por meio de simulações ou propostas cotidianas, e com forte apelo à conectividade, ou seja, há a interligação de temas, de experiências/experimentos, de modo a se desdobrar, multidisciplinarmente, em outras conexões/ligações." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador11c">
                            O enunciado e respostas apresentam associações, por meio de simulações ou propostas cotidianas, e com forte apelo à conectividade, ou seja, há a interligação de temas, de experiências/experimentos, de modo a se desdobrar, multidisciplinarmente, em outras conexões/ligações.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 12: Intervenção</span>
                <i class="fa-regular fa-circle-question" title="Neste indicador o foco são as interferências, ou seja, promover, instigar interferências, intervenções. Portanto, quanto mais o usuário puder interferir, interagir, manipular o item, mas ele vai atender a este indicador. Tal manipulação vem ao encontro da compreensão de que o usuário não é (e não deve ser) passivo, mas tem condições de cocriar caminhos, explorando o máximo de possibilidades disponíveis para resolução do item. O item é visto com uma atividade favorecedora de experimentações e explorações e, por isso, intervir se relaciona a construir conhecimento e não a 'adquirir' passivamente informações que serão postas à prova posteriormente sem relação com o mundo da vida, o cotidiano."></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador12a" class="form-check-input" type="radio" name="questionario_item12" value="O enunciado e respostas não promovem e/ou não interferência/manipulação do usuário no objeto/item, pois direcionam para caminhos únicos de resolução." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador12a">
                            O enunciado e respostas não promovem e/ou não interferência/manipulação do usuário no objeto/item, pois direcionam para caminhos únicos de resolução.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador12b" class="form-check-input" type="radio" name="questionario_item12" value="O enunciado e respostas promovem e/ou favorecem pontualmente e de forma controlada e restrita a interferência/manipulação do usuário no objeto/item." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador12b">
                            O enunciado e respostas promovem e/ou favorecem pontualmente e de forma controlada e restrita a interferência/manipulação do usuário no objeto/item.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador12c" class="form-check-input" type="radio" name="questionario_item12" value="O enunciado e/ou respostas promovem e/ou favorecem a interferência/manipulação do usuário no objeto/item, de modo a oferecer recursos e pistas para sua execução é construção." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador12c">
                            O enunciado e/ou respostas promovem e/ou favorecem a interferência/manipulação do usuário no objeto/item, de modo a oferecer recursos e pistas para sua execução é construção.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 13: Bidirecionalidade</span>
                <i class="fa-regular fa-circle-question" title="Neste indicador o foco são múltiplas possibilidades e direções possiveis no item. A multidisciplinaridade pressupõe que as disciplinas podem ser postas juntas, em paralelo, ainda que mantenham suas estruturas e especificidades intocáveis. Portanto, compreender as múltiplas possibilidades e direções não significa alterar as estruturas disciplinares, mas aproximá-las, colocá-las em contato de modo que uma possa ajudar a outra na resolução/resposta a um item. Portanto, quanto mais as disciplinas se aproximam para um fim comum, e quanto mais consideram caminhos diversos, múltiplos, mais bidirecional será o item. Entretanto, como estamos falando de multidisciplinaridade, as fornteiras entre as disciplinas se mantém, continuam existindo."></i>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador13a" class="form-check-input" type="radio" name="questionario_item13" value="O enunciado e respostas não consideram ações do usuário em múltiplas direções, ou seja, há predimínio da unilateralidade do item, sem possibilitar ou mesmo atentar para múltiplos formatos e/ou com diversas mídias e recursos. Só há um caminho, um formato, uma possibilidade." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador13a">
                            O enunciado e respostas não consideram ações do usuário em múltiplas direções, ou seja, há predimínio da unilateralidade do item, sem possibilitar ou mesmo atentar para múltiplos formatos e/ou com diversas mídias e recursos. Só há um caminho, um formato, uma possibilidade.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador13b" class="form-check-input" type="radio" name="questionario_item13" value="O enunciado e as respostas promovem ações do usuário em direções específicas e direcionadas. Há certa flexibilidade ao se considerar que há mais do que um caminho, mas há restrições. há controle, ainda que se integre mais do que uma mídia, recurso e formato." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador13b">
                            O enunciado e as respostas promovem ações do usuário em direções específicas e direcionadas. Há certa flexibilidade ao se considerar que há mais do que um caminho, mas há restrições. há controle, ainda que se integre mais do que uma mídia, recurso e formato.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador13c" class="form-check-input" type="radio" name="questionario_item13" value="O enunciado e as respostas promovem ações do usuário em múltiplas direções porque compreende-se que os múltiplos formatos, com diversas mídias e recursos, precisam estar presentes para que se resolva questões e problemas." onclick="exibeNivelInteratividade()">
                        <label class="form-check-label" for="indicador13c">
                            O enunciado e as respostas promovem ações do usuário em múltiplas direções porque compreende-se que os múltiplos formatos, com diversas mídias e recursos, precisam estar presentes para que se resolva questões e problemas.
                        </label>
                    </div>
                </fieldset>
            </section>

            

            <textarea id="campo_observacao" name="observacao" rows="5" cols="33" placeholder="Observações"></textarea>
            <div class="notas_rodape">
                <b>Nota de Rodapé:</b>
                <p> e-Val: Avaliação da interatividade em itens digitais
                    Pesquisadoras: Dra. Liamara Scortegagna (UFJF) e Dra. Adriana Bruno (UNIRIO).
                    Projeto de pesquisa: Itens digitais e interativos em e-Avaliação de larga escala: processos cognitivos, estratégias e produtos didáticos na relação entre meio impresso e meio digital (2020/2021).
                    Financiamento: Centro de Políticas Públicas e Avaliação da Educação da Universidade Federal de Juiz de Fora (CAEd/UFJF).
                </p>
            </div>
            <div class="form-group justify-content-end text-right">
                <input class="btn btn-primary px-4" title="Gera Relatório para Impressão/Download" type="submit" value="Gerar Relatório">
            </div>
        </form>

    </div>
</div>

@endsection