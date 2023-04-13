@extends('layouts.layout')

@section('titulo_pagina')
Questionário de Interatividade
@endsection

@section('content')

{{-- Script de interatividade --}}

<script defer src="js/interatividade.js"></script> {{-- script baixado durante carregamento mas só executado depois de carregada a página (é adiado) --}}

@php
    $messages = json_decode(file_get_contents(resource_path('/json/messages.json')));
@endphp

<x-panels.content_special>
    <div class="row">

        <x-icons.logo_special
            :questionario="$questionario"
        />

        <div class="col-lg-12 my-4">

            {{-- Nível de interatividade --}}

            <div id="barra" class="transparencia">
                <div class="progress barra_progresso w-50 mb-2">
                    <div id="myBar" class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <span id="interatividade" class="justify-content-center row">
                    <p id="count"></p>
                    <p class="pr-3"> Nível de Interatividade: </p>
                    <p id="nivel_interatividade" class="font-weight-bold"></p>
                </span>
            </div>

            {{-- ---------------------------------- --}}

            <x-alerts.error />

            <form id="form1" method="post" class="formulario">
                @csrf
                <section class="form-group">
                    <span>Indicador 1: Textos e elementos gráficos</span>
                    <x-svg-tooltip :message="$messages->q1mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador1a" class="form-check-input" type="radio" name="questionario_item1" value="Apresenta textos e/ou elementos gráficos estáticos (figuras e fotos) em seu enunciado, respostas e informações adicionais." required onclick="exibeNivelInteratividade()" >
                            <label class="form-check-label" for="indicador1a">
                                Apresenta textos e/ou elementos gráficos estáticos (figuras e fotos) em seu enunciado, respostas e informações adicionais
                                <x-svg-tooltip :message="$messages->q1ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador1b" class="form-check-input" type="radio" name="questionario_item1" value="Apresenta textos e/ou elementos gráficos no formato de mídias como, figuras, fotos vídeos e/ou sons com algum tipo de animação." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador1b">
                                Apresenta textos e/ou elementos gráficos no formato de mídias como, figuras, fotos vídeos e/ou sons com algum tipo de animação.
                                <x-svg-tooltip :message="$messages->q1mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador1c" class="form-check-input" type="radio" name="questionario_item1" value="Apresenta textos e/ou elementos gráficos no formato de vídeos e/ou sons interativos, animações, imagens (figuras, fotos etc) dinâmicas, simuladores etc, em seu enunciado, respostas e informações adicionais." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador1c">
                                Apresenta textos e/ou elementos gráficos no formato de vídeos e/ou sons interativos, animações, imagens (figuras, fotos etc) dinâmicas, simuladores etc, em seu enunciado, respostas e informações adicionais.
                                <x-svg-tooltip :message="$messages->q1mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 2: Espaço/meio de interação</span>
                    <x-svg-tooltip :message="$messages->q2mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador2a" class="form-check-input" type="radio" name="questionario_item2" value="Apresenta possibilidade para que o aluno interfira na questão/resposta apenas com a opção 'clicar' com auxílio, por exemplo, de mouse ou touch screen." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador2a">
                                Apresenta possibilidade para que o aluno interfira na questão/resposta apenas com a opção 'clicar' com auxílio, por exemplo, de mouse ou touch screen.
                                <x-svg-tooltip :message="$messages->q2ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador2b" class="form-check-input" type="radio" name="questionario_item2" value="Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen" required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador2b">
                                Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen.
                                <x-svg-tooltip :message="$messages->q2mb->message" color='green'/>
                                </label>
                        </div>

                        <div class="form-group form-check">
                           <input id="indicador2c" class="form-check-input" type="radio" name="questionario_item2" value="Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen e a utilização de recursos como, por exemplo, calculadora, bloco de anotações, acesso a links de informações adicionais, espaço para experimentação, simulação etc." required onclick="exibeNivelInteratividade()">
                           <label class="form-check-label" for="indicador2c">
                               Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen e a utilização de recursos como, por exemplo, calculadora, bloco de anotações, acesso a links de informações adicionais, espaço para experimentação, simulação etc.
                               <x-svg-tooltip :message="$messages->q2mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 3: Comportamento dos elementos no espaço</span>
                    <x-svg-tooltip :message="$messages->q3mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade ">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador3a" class="form-check-input" type="radio" name="questionario_item3" value="Não apresenta orientações para o usuário de como percorrer para desenvolver a questão." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador3a">
                                Não apresenta orientações para o usuário de como percorrer para desenvolver a questão.
                                <x-svg-tooltip :message="$messages->q3ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador3b" class="form-check-input" type="radio" name="questionario_item3" value="Apresenta orientações para o usuário de como percorrer para desenvolver a questão apenas no formato texto (enunciado)." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador3b">
                                Apresenta orientações para o usuário de como percorrer para desenvolver a questão apenas no formato texto (enunciado).
                                <x-svg-tooltip :message="$messages->q3mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador3c" class="form-check-input" type="radio" name="questionario_item3" value="Apresenta orientações para o usuário de como percorrer para desenvolver a questão de forma explícita (textual, elementos gráficos ou audiovisual)." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador3c">
                                Apresenta orientações para o usuário de como percorrer para desenvolver a questão de forma explícita (textual, elementos gráficos ou audiovisual).
                                <x-svg-tooltip :message="$messages->q3mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 4: Tempo</span>
                    <x-svg-tooltip :message="$messages->q4mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade ">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador4a" class="form-check-input" type="radio" name="questionario_item4" value="Apresenta ações em textos e/ou elementos gráficos estáticos &quot;sem&quot; determinação de tempo para execução." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador4a">
                                Apresenta ações em textos e/ou elementos gráficos estáticos "sem" determinação de tempo para execução.
                                <x-svg-tooltip :message="$messages->q4ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador4b" class="form-check-input" type="radio" name="questionario_item4" value="Apresenta ações em mídias como vídeos, vídeos interativos e animações &quot;sem&quot; determinação de tempo para execução." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador4b">
                                Apresenta ações em mídias como vídeos, vídeos interativos e animações "sem" determinação de tempo
                                para execução.
                                <x-svg-tooltip :message="$messages->q4mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador4c" class="form-check-input" type="radio" name="questionario_item4" value="Apresenta ações em mídias como vídeos, vídeos
                            interativos, animações, simuladores etc, &quot;com&quot; determinação de tempo para execução." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador4c">
                                Apresenta ações em mídias como vídeos, vídeos interativos, animações, simuladores etc, "com" determinação de tempo para execução.
                                <x-svg-tooltip :message="$messages->q4mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 5: Movimento/liberdade do usuário no item</span>
                    <x-svg-tooltip :message="$messages->q5mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador5a" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão &quot;somente&quot; para frente e para trás por meio de uma sequência linear e pré-definida." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador5a">
                                Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão "somente" para frente e para trás por meio de uma sequência linear e pré-definida.
                                <x-svg-tooltip :message="$messages->q5ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador5b" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta possibilidade para que o usuário seja capaz de se mover de forma intuitiva no item/questão por meio de uma sequência não linear e pré-definida (Ex.: menus)." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador5b">
                                Apresenta possibilidade para que o usuário seja capaz de se mover de forma intuitiva no item/questão por meio de uma sequência não linear e pré-definida (Ex.: menus).
                                <x-svg-tooltip :message="$messages->q5mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador5c" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão de forma livre e autônoma." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador5c">
                                Apresenta possibilidade para que o usuário seja capaz de se mover no item/questão de forma livre e autônoma.
                                <x-svg-tooltip :message="$messages->q5mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 6: Suporte e feedback</span>
                    <x-svg-tooltip :message="$messages->q6mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador6a" class="form-check-input" type="radio" name="questionario_item6" value="Não apresenta opção de retorno/feedback ou ajuda." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador6a">
                                Não apresenta opção de retorno/feedback ou ajuda.
                                <x-svg-tooltip :message="$messages->q6ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador6b" class="form-check-input" type="radio" name="questionario_item6" value="Apresenta somente opção(ões) de retorno e/ou feedbacks." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador6b">
                                Apresenta somente opção(ões) de retorno e/ou feedbacks.
                                <x-svg-tooltip :message="$messages->q6mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador6c" class="form-check-input" type="radio" name="questionario_item6" value="Apresenta opção de retorno/feedback e ajuda." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador6c">
                                Apresenta opção de retorno/feedback e ajuda.
                                <x-svg-tooltip :message="$messages->q6mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 7: Diálogo entre usuários e conteúdo</span>
                    <x-svg-tooltip :message="$messages->q7mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador7a" class="form-check-input" type="radio" name="questionario_item7" value="Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item avaliativo numa
                            sequência linear e pré-definida." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador7a">
                                Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item avaliativo numa sequência linear e pré-definida.
                                <x-svg-tooltip :message="$messages->q7ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador7b" class="form-check-input" type="radio" name="questionario_item7" value="Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item do processo avaliativos numa sequência não linear." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador7b">
                                Após a ação do usuário em finalizar o item/questão, o sistema apresenta o próximo item do processo avaliativos numa sequência não linear.
                                <x-svg-tooltip :message="$messages->q7mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador7c" class="form-check-input" type="radio" name="questionario_item7" value="As escolhas das ações do usuário determinam a sequência e a continuidade do processo avaliativo." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador7c">
                                As escolhas das ações do usuário determinam a sequência e a continuidade do processo avaliativo.
                                <x-svg-tooltip :message="$messages->q7mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 8: Flexibilidade e Abertura</span>
                    <x-svg-tooltip :message="$messages->q8mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador8a" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e as respostas não apresentam possibilidades/trilhas diversas e flexíveis, com sistemas/caminhos/pistas de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, não permitem o uso de mais do que um recurso para que se chegue à resposta esperada." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador8a">
                                O enunciado e as respostas não apresentam possibilidades/trilhas diversas e flexíveis, com sistemas/caminhos/pistas de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, não permitem o uso de mais do que um recurso para que se chegue à resposta esperada.
                                <x-svg-tooltip :message="$messages->q8ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador8b" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e as respostas apresentam pelo menos duas possibilidades/trilhas flexíveis, com algum(s) sistema/caminho/pista de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, permitem o uso de mais do que um recurso para que se chegue à resposta esperada." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador8b">
                                O enunciado e as respostas apresentam pelo menos duas possibilidades/trilhas flexíveis, com algum(s) sistema/caminho/pista de entrada e saídas (múltiplas experimentações, expressões e experiências) para resolução do item, ou seja, permitem o uso de mais do que um recurso para que se chegue à resposta esperada.
                                <x-svg-tooltip :message="$messages->q8mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador8c" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e respostas apresentam possibilidades/trilhas diversas e flexíveis, com múltiplos sistemas/caminhos/pistas de entrada e saídas ( experimentações, expressões e experiências muito flexíveis e abertas) para resolução do item, ou seja, permitem o uso de mais de vários recursos disponíveis (tecnológicos e pedagógicos para que se chegue à resposta esperada." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador8c">
                                O enunciado e respostas apresentam possibilidades/trilhas diversas e flexíveis, com múltiplos sistemas/caminhos/pistas de entrada e saídas ( experimentações, expressões e experiências muito flexíveis e abertas) para resolução do item, ou seja, permitem o uso de mais de vários recursos disponíveis (tecnológicos e pedagógicos para que se chegue à resposta esperada.
                                <x-svg-tooltip :message="$messages->q8mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 9: Integração Inter-áreas</span>
                    <x-svg-tooltip :message="$messages->q9mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador9a" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e respostas não apresentam elos de ligação e/ou articulação entre áreas do conhecimento ou entre conhecimentos da mesma área." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador9a">
                                O enunciado e respostas não apresentam elos de ligação e/ou articulação entre áreas do conhecimento ou entre conhecimentos da mesma área.
                                <x-svg-tooltip :message="$messages->q9ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador9b" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e respostas apresentam, sutilmente, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador9b">
                                O enunciado e respostas apresentam, sutilmente, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área.
                                <x-svg-tooltip :message="$messages->q9mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador9c" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e/ou respostas criam, de forma explícita, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador9c">
                                O enunciado e/ou respostas criam, de forma explícita, elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área.
                                <x-svg-tooltip :message="$messages->q9mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 10: Integração Colaborativa</span>
                    <x-svg-tooltip :message="$messages->q10mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador10a" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e/ou respostas não possibilita(m) desenvolver ações coletivas e colaborativas para sua resolução, tampouco arquitetar percursos hipermidiáticos." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador10a">
                                O enunciado e/ou respostas não possibilita(m) desenvolver ações coletivas e colaborativas para sua resolução, tampouco arquitetar percursos hipermidiáticos.
                                <x-svg-tooltip :message="$messages->q10ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador10b" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e/ou respostas possibilitam ações por meio de consultas a banco de dados, promovendo pequenos e limitados percursos hipermidiáticos, ou seja, trilhas realizadas com os recursos disponíveis digitalmente." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador10b">
                                O enunciado e/ou respostas possibilitam ações por meio de consultas a banco de dados, promovendo pequenos e limitados percursos hipermidiáticos, ou seja, trilhas realizadas com os recursos disponíveis digitalmente.
                                <x-svg-tooltip :message="$messages->q10mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador10c" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e respostas promove(m) ações coletivas e colaborativas (entre usuários) e arquiteta percursos hipermidiáticos disponíveis para resolução do item." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador10c">
                                O enunciado e respostas promove(m) ações coletivas e colaborativas (entre usuários) e arquiteta percursos hipermidiáticos disponíveis para resolução do item.
                                <x-svg-tooltip :message="$messages->q10mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 11: Permutabilidade</span>
                    <x-svg-tooltip :message="$messages->q11mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador11a" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e/ou respostas não criam possibilidades de conectividade, nem multidisciplinaridade. Não traz(em) experiências de modo a se desdobrar/promover conexões/ligações mais amplas e complexas, ligadas, explicitamente, ao cotidiano." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador11a">
                                O enunciado e/ou respostas não criam possibilidades de conectividade, nem multidisciplinaridade. Não traz(em) experiências de modo a se desdobrar/promover conexões/ligações mais amplas e complexas, ligadas, explicitamente, ao cotidiano.
                                <x-svg-tooltip :message="$messages->q11ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador11b" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e/ou respostas criam possibilidades de conectividade, de associações e simulações, mas sem relações multidisciplinares. Experiências mais amplas e complexas, como aquelas vivenciadas no cotidiano e que careçam de conhecimentos de áreas diversas cujas resoluções necessitem dessas ligações, são desprezadas, pois o foco são conexões mais simples, mais óbvias, objetivas e menos reflexivas." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador11b">
                                O enunciado e/ou respostas criam possibilidades de conectividade, de associações e simulações, mas sem relações multidisciplinares. Experiências mais amplas e complexas, como aquelas vivenciadas no cotidiano e que careçam de conhecimentos de áreas diversas cujas resoluções necessitem dessas ligações, são desprezadas, pois o foco são conexões mais simples, mais óbvias, objetivas e menos reflexivas.
                                <x-svg-tooltip :message="$messages->q11mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador11c" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e respostas apresentam associações, por meio de simulações ou propostas cotidianas, e com forte apelo à conectividade, ou seja, há a interligação de temas, de experiências/experimentos, de modo a se desdobrar, multidisciplinarmente, em outras conexões/ligações." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador11c">
                                O enunciado e respostas apresentam associações, por meio de simulações ou propostas cotidianas, e com forte apelo à conectividade, ou seja, há a interligação de temas, de experiências/experimentos, de modo a se desdobrar, multidisciplinarmente, em outras conexões/ligações.
                                <x-svg-tooltip :message="$messages->q11mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 12: Intervenção</span>
                    <x-svg-tooltip :message="$messages->q12mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador12a" class="form-check-input" type="radio" name="questionario_item12" value="O enunciado e respostas não promovem e/ou não interferência/manipulação do usuário no objeto/item, pois direcionam para caminhos únicos de resolução." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador12a">
                                O enunciado e respostas não promovem e/ou não interferência/manipulação do usuário no objeto/item, pois direcionam para caminhos únicos de resolução.
                                <x-svg-tooltip :message="$messages->q12ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador12b" class="form-check-input" type="radio" name="questionario_item12" value="O enunciado e respostas promovem e/ou favorecem pontualmente e de forma controlada e restrita a interferência/manipulação do usuário no objeto/item." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador12b">
                                O enunciado e respostas promovem e/ou favorecem pontualmente e de forma controlada e restrita a interferência/manipulação do usuário no objeto/item.
                                <x-svg-tooltip :message="$messages->q12mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador12c" class="form-check-input" type="radio" name="questionario_item12" value="O enunciado e/ou respostas promovem e/ou favorecem a interferência/manipulação do usuário no objeto/item, de modo a oferecer recursos e pistas para sua execução é construção." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador12c">
                                O enunciado e/ou respostas promovem e/ou favorecem a interferência/manipulação do usuário no objeto/item, de modo a oferecer recursos e pistas para sua execução é construção.
                                <x-svg-tooltip :message="$messages->q12mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <section class="form-group">
                    <span>Indicador 13: Bidirecionalidade</span>
                    <x-svg-tooltip :message="$messages->q13mq->message" color='green'/>
                    <p>O Item Digital:</p>
                    <fieldset class="indicador_interatividade">
                        <legend>Critérios:</legend>
                        <div class="form-group form-check">
                            <input id="indicador13a" class="form-check-input" type="radio" name="questionario_item13" value="O enunciado e respostas não consideram ações do usuário em múltiplas direções, ou seja, há predomínio da unilateralidade do item, sem possibilitar ou mesmo atentar para múltiplos formatos e/ou com diversas mídias e recursos. Só há um caminho, um formato, uma possibilidade." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador13a">
                                O enunciado e respostas não consideram ações do usuário em múltiplas direções, ou seja, há predomínio da unilateralidade do item, sem possibilitar ou mesmo atentar para múltiplos formatos e/ou com diversas mídias e recursos. Só há um caminho, um formato, uma possibilidade.
                                <x-svg-tooltip :message="$messages->q13ma->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador13b" class="form-check-input" type="radio" name="questionario_item13" value="O enunciado e as respostas promovem ações do usuário em direções específicas e direcionadas. Há certa flexibilidade ao se considerar que há mais do que um caminho, mas há restrições. Há controle, ainda que se integre mais do que uma mídia, recurso e formato." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador13b">
                                O enunciado e as respostas promovem ações do usuário em direções específicas e direcionadas. Há certa flexibilidade ao se considerar que há mais do que um caminho, mas há restrições. há controle, ainda que se integre mais do que uma mídia, recurso e formato.
                                <x-svg-tooltip :message="$messages->q13mb->message" color='green'/>
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input id="indicador13c" class="form-check-input" type="radio" name="questionario_item13" value="O enunciado e as respostas promovem ações do usuário em múltiplas direções porque compreende-se que os múltiplos formatos, com diversas mídias e recursos, precisam estar presentes para que se resolva questões e problemas." required onclick="exibeNivelInteratividade()">
                            <label class="form-check-label" for="indicador13c">
                                O enunciado e as respostas promovem ações do usuário em múltiplas direções porque compreende-se que os múltiplos formatos, com diversas mídias e recursos, precisam estar presentes para que se resolva questões e problemas.
                                <x-svg-tooltip :message="$messages->q13mc->message" color='green'/>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <textarea id="campo_observacao" name="observacao" rows="5" cols="33" placeholder="Observações"></textarea>
                <div class="notas_rodape">
                    <b>Nota de Rodapé:</b>
                    <p> e-VAL: Avaliação da interatividade em itens digitais
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

    <x-sweetalerts.info_help />
</x-panels.content_special>

@endsection