@extends('layouts.layout')

@section('titulo_pagina')
Questionário de Interatividade
@endsection

@section('content')
<div class="row">
    <div class="cabecalho col-lg-12">
        <div class="logo_titulo d-flex">
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

    <script>
        let count = 0;
        function myFunction() 
        {
            var item = document.getElementById("indicador1a");
            if(item.checked == true){
                count = count + 10;
            }
            if(count >= 0 && count < 40)
                document.getElementById("teste").innerHTML = "Baixa Interatividade";
            else if(count >= 40 && count < 70 )
                document.getElementById("teste").innerHTML = "Média Interatividade";
            else
                document.getElementById("teste").innerHTML = "Alta Interatividade";
        }
    </script>

<div class="col-lg-12 my-4">             
    
    <p id="teste" class="font-weight-bold text-center"></p>

        <form id="form1" method="post" class="formulario">
            @csrf
            <section class="form-group">
                <span>Indicador 1: Textos e elementos gráficos</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador1a" class="form-check-input" type="radio" name="questionario_item1" value="Apresenta textos e/ou elementos gráficos estáticos (figuras e fotos) em seu enunciado, respostas e informações adicionais." onclick="myFunction()">
                        <label class="form-check-label" for="indicador1a">
                            Apresenta textos e/ou elementos gráficos estáticos (figuras e fotos) em seu enunciado, respostas e informações adicionais. 
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador1b" class="form-check-input" type="radio" name="questionario_item1" value="Apresenta textos e/ou elementos gráficos no formato de mídias como, figuras, fotos vídeos e/ou sons com algum tipo de animação." onclick="myFunction()">
                        <label class="form-check-label" for="indicador1b">
                            Apresenta textos e/ou elementos gráficos no formato de mídias como, figuras, fotos vídeos e/ou sons com algum tipo de animação. 
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador1c" class="form-check-input" type="radio" name="questionario_item1" value="Apresenta textos e/ou elementos gráficos no formato de vídeos e/ou sons interativos, animações, imagens (figuras, fotos etc) dinâmicas, simuladores etc, em seu enunciado, respostas e informações adicionais." onclick="myFunction()">
                        <label class="form-check-label" for="indicador1c">
                            Apresenta textos e/ou elementos gráficos no formato de vídeos e/ou sons interativos, animações, imagens (figuras, fotos etc) dinâmicas, simuladores etc, em seu enunciado, respostas e informações adicionais.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 2: Espaço/meio de interação</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador2a" class="form-check-input" type="radio" name="questionario_item2" value="Apresenta possibilidade para que o aluno interfira na questão/resposta apenas com a opção 'clicar' com auxílio, por exemplo, de mouse ou touch screen." checked>
                        <label class="form-check-label" for="indicador2a">
                            Apresenta possibilidade para que o aluno interfira na questão/resposta apenas com a opção 'clicar' com auxílio, por exemplo, de mouse ou touch screen.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador2b" class="form-check-input" type="radio" name="questionario_item2" value="Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen">
                        <label class="form-check-label" for="indicador2a">
                            Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen.
                        </label>
                    </div>

                    <div class="form-group form-check">
                       <input id="indicador2c" class="form-check-input" type="radio" name="questionario_item2" value="Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen e a utilização de recursos como, por exemplo, calculadora, bloco de anotações, acesso a links de informações adicionais, espaço para experimentação, simulação etc.">
                       <label class="form-check-label" for="indicador2b">
                           Apresenta meios para que o aluno interfira na questão/resposta como, selecionar, arrastar, manipular ou desenhar com auxílio, por exemplo, de mouse ou touch screen e a utilização de recursos como, por exemplo, calculadora, bloco de anotações, acesso a links de informações adicionais, espaço para experimentação, simulação etc.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 3: Comportamento dos elementos no espaço</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade ">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador3a" class="form-check-input" type="radio" name="questionario_item3" value="Não apresenta orientações para o usuário de como percorrer para desenvolver a questão." checked>
                        <label class="form-check-label" for="indicador3a">
                            Não apresenta orientações para o usuário de como percorrer para desenvolver a questão.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador3b" class="form-check-input" type="radio" name="questionario_item3" value="Apresenta orientações para o usuário de como percorrer para desenvolver a questão apenas no formato texo (enunciado).">
                        <label class="form-check-label" for="indicador3b">
                            Apresenta orientações para o usuário de como percorrer para desenvolver a questão apenas no formato texo (enunciado).
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador3c" class="form-check-input" type="radio" name="questionario_item3" value="Apresenta orientações para o usuário de como percorrer para desenvolver a questão de forma explícita (textual, elementos gráficos ou audiovisual).">
                        <label class="form-check-label" for="indicador3c">
                            Apresenta orientações para o usuário de como percorrer para desenvolver a questão de forma explícita (textual, elementos gráficos ou audiovisual).
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 4: Movimento/liberdade do usuário no item</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade ">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador4a" class="form-check-input" type="radio" name="questionario_item4" value="Apresenta possibilidade para que o usuário seja capaz de se mover na questão somente para frente ou para trás por meio de uma sequência linear e pré-definida." checked>
                        <label class="form-check-label" for="indicador4a">
                            Apresenta possibilidade para que o usuário seja capaz de se mover na questão somente para frente ou para trás por meio de uma sequência linear e pré-definida.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador4b" class="form-check-input" type="radio" name="questionario_item4" value="Apresenta possibilidade para que o usuário seja capaz de se mover de forma intuitiva na questão por meio de uma sequência não linear e pré-definidas (Ex.: menus).">
                        <label class="form-check-label" for="indicador4b">
                            Apresenta possibilidade para que o usuário seja capaz de se mover de forma intuitiva na questão por meio de uma sequência não linear e pré-definidas (Ex.: menus).
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador4c" class="form-check-input" type="radio" name="questionario_item4" value="Apresenta possibilidade para que o usuário seja capaz de se mover na questão de forma livre e autônoma.">
                        <label class="form-check-label" for="indicador4c">
                            Apresenta possibilidade para que o usuário seja capaz de se mover na questão de forma livre e autônoma.
                        </label>
                    </div>
                </fieldset>
            </section>

            <section class="form-group">
                <span>Indicador 5: Suporte e feedback</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador5a" class="form-check-input" type="radio" name="questionario_item5" value="Não apresenta opção de ajuda ou retorno." checked>
                        <label class="form-check-label" for="indicador5a">
                            Não apresenta opção de ajuda ou retorno.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador5b" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta retorno como mensagens ou feedbacks.">
                        <label class="form-check-label" for="indicador5b">
                            Apresenta retorno como mensagens ou feedbacks.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador5c" class="form-check-input" type="radio" name="questionario_item5" value="Apresenta opção de ajuda e retorno como mensagens ou feedbacks.">
                        <label class="form-check-label" for="indicador5c">
                            Apresenta opção de ajuda e retorno como mensagens ou feedbacks.
                        </label>
                    </div>
                </fieldset>
            </section>

            <section class="form-group">
                <span>Indicador 6: Diálogo entre usuário e conteúdo</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador6a" class="form-check-input" type="radio" name="questionario_item6" value="Após a ação do usuário em finalizar, o sistema apresenta o próximo item do processo avaliativo numa sequência linear e pré-definida." checked>
                        <label class="form-check-label" for="indicador6a">
                            Após a ação do usuário em finalizar, o sistema apresenta o próximo item do processo avaliativo numa sequência linear e pré-definida.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador6b" class="form-check-input" type="radio" name="questionario_item6" value="Após a ação do usuário em finalizar, o sistema apresenta o próximo item do processo avaliativo numa sequência não linear.">
                        <label class="form-check-label" for="indicador6b">
                            Após a ação do usuário em finalizar, o sistema apresenta o próximo item do processo avaliativo numa sequência não linear.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador6c" class="form-check-input" type="radio" name="questionario_item6" value="As escolhas das ações do usuário determinam a sequência e a continuidade do processo avaliativo (uso de chatbots/inteligência artificial etc).">
                        <label class="form-check-label" for="indicador6c">
                            As escolhas das ações do usuário determinam a sequência e a continuidade do processo avaliativo (uso de chatbots/inteligência artificial etc).
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 7: Flexibilidade e abertura</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador7a" class="form-check-input" type="radio" name="questionario_item7" value="O enunciado e respostas não apresentam possibilidades diversas e flexíveis, com sistemas de entrada e saídas para resolução d o item, ou seja, não permitem o uso de mais do que um recurso para que se chegue à resposta esperada." checked>
                        <label class="form-check-label" for="indicador7a">
                            O enunciado e respostas não apresentam possibilidades diversas e flexíveis, com sistemas de entrada e saídas para resolução d o item, ou seja, não permitem o uso de mais do que um recurso para que se chegue à resposta esperada.
                        </label>
                    </div>

                    <div class="form-group form-check">
                        <input id="indicador7b" class="form-check-input" type="radio" name="questionario_item7" value="O enunciado e respostas apresentam pelo menos duas possibilidades flexíveis, com sistemas de entrada e saídas, para resolução do item, permitindo o uso de mais do que um recurso para que se chegue à resposta esperada.">
                        <label class="form-check-label" for="indicador7b">
                            O enunciado e respostas apresentam pelo menos duas possibilidades flexíveis, com sistemas de entrada e saídas, para resolução do item, permitindo o uso de mais do que um recurso para que se chegue à resposta esperada.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador7c" class="form-check-input" type="radio" name="questionario_item7" value="O enunciado e respostas apresentam mais de duas possibilidades flexíveis, com sistemas de entrada e saídas, múltiplos caminhos, para resolução do item, ou seja, permite uso de mais do que um recurso.">
                        <label class="form-check-label" for="indicador7c">
                            O enunciado e respostas apresentam mais de duas possibilidades flexíveis, com sistemas de entrada e saídas, múltiplos caminhos, para resolução do item, ou seja, permite uso de mais do que um recurso.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 8: Integração</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador8a" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e respostas não criam elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área e/ou não possibilitam ações coletivas e colaborativas para sua resolução e/ou arquiteta percursos hipertextuais." checked>
                        <label class="form-check-label" for="indicador8a">
                            O enunciado e respostas não criam elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área e/ou não possibilitam ações coletivas e colaborativas para sua resolução e/ou arquiteta percursos hipertextuais.
                        </label>
                    </div>

                    <div class="form-group form-check">
                        <input id="indicador8b" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e respostas criam elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área porém não possibilitam ações coletivas e colaborativas para sua resolução e/ou arquiteta percursos hipertextuais.">
                        <label class="form-check-label" for="indicador8b">
                            O enunciado e respostas criam elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área porém não possibilitam ações coletivas e colaborativas para sua resolução e/ou arquiteta percursos hipertextuais.
                        </label>
                    </div>

                    <div class="form-group form-check">
                        <input id="indicador8c" class="form-check-input" type="radio" name="questionario_item8" value="O enunciado e respostas criam elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área e/ou possibilita ações coletivas e colaborativas para sua resolução e/ou arquiteta percursos hipertextuais.">
                        <label class="form-check-label" for="indicador8c">
                            O enunciado e respostas criam elos de ligação e articulação entre áreas do conhecimento ou entre conhecimentos da mesma área e/ou possibilita ações coletivas e colaborativas para sua resolução e/ou arquiteta percursos hipertextuais.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 9: Permutabilidade</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador9a" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e respostas não criam possibilidades de associações, simulações e conectividade, ou seja, não há interligação de temas, de experiências, de modo a se desdobrar/promover outras conexões/ligações." checked>
                        <label class="form-check-label" for="indicador9a">
                            O enunciado e respostas não criam possibilidades de associações, simulações e conectividade, ou seja, não há interligação de temas, de experiências, de modo a se desdobrar/promover outras conexões/ligações.
                        </label>
                    </div>

                    <div class="form-group form-check">
                        <input id="indicador9b" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e respostas criam possibilidades de associações e simulações, porém não há  conectividade, ou seja, não há interligação de temas, de experiências, de modo a se desdobrar em outras conexões/ligações.">
                        <label class="form-check-label" for="indicador9b">
                            O enunciado e respostas criam possibilidades de associações e simulações, porém não há  conectividade, ou seja, não há interligação de temas, de experiências, de modo a se desdobrar em outras conexões/ligações.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador9c" class="form-check-input" type="radio" name="questionario_item9" value="O enunciado e respostas criam possibilidades de associações, simulações e a conectividade, ou seja, há a interligação de temas, de experiências, de modo a se desdobrar em outras conexões/ligações.">
                        <label class="form-check-label" for="indicador9c">
                            O enunciado e respostas criam possibilidades de associações, simulações e a conectividade, ou seja, há a interligação de temas, de experiências, de modo a se desdobrar em outras conexões/ligações.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 10: Intervenção</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador10a" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e respostas não promovem e/ou não favorecem a interferência/manipulação do usuário no objeto/item." checked>
                        <label class="form-check-label" for="indicador10a">
                            O enunciado e respostas não promovem e/ou não favorecem a interferência/manipulação do usuário no objeto/item.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador10b" class="form-check-input" type="radio" name="questionario_item10" value="O enunciado e respostas promovem e/ou favorecem pontualmente e de forma controlada e restrita a interferência/manipulação do usuário no objeto/item.">
                        <label class="form-check-label" for="indicador10b">
                            O enunciado e respostas promovem e/ou favorecem pontualmente e de forma controlada e restrita a interferência/manipulação do usuário no objeto/item.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador10c" class="form-check-input" type="radio" name="questionario_item10" value=" O enunciado e respostas promovem e/ou favorecem a interferência/manipulação do usuário no objeto/item.">
                        <label class="form-check-label" for="indicador10c">
                            O enunciado e respostas promovem e/ou favorecem a interferência/manipulação do usuário no objeto/item.
                        </label>
                    </div>
                </fieldset>
            </section>
            
            <section class="form-group">
                <span>Indicador 11: Bidirecionalidade</span>
                <p>O Item Digital:</p>
                <fieldset class="indicador_interatividade">
                    <legend>Critérios:</legend>
                    <div class="form-group form-check">
                        <input id="indicador11a" class="form-check-input" type="radio" name="questionario_item11" value=" O enunciado e respostas não promovem ações do usuário no item em múltiplas direções, em múltiplos formatos e com diversas mídias e recursos." checked>
                        <label class="form-check-label" for="indicador11a">
                            O enunciado e respostas não promovem ações do usuário no item em múltiplas direções, em múltiplos formatos e com diversas mídias e recursos.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador11b" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e respostas promovem ações do usuário no item em direções específicas e direcionadas, mas com mídias, recursos e formatos diversos.">
                        <label class="form-check-label" for="indicador11b">
                            O enunciado e respostas promovem ações do usuário no item em direções específicas e direcionadas, mas com mídias, recursos e formatos diversos.
                        </label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input id="indicador11c" class="form-check-input" type="radio" name="questionario_item11" value="O enunciado e respostas promovem ações do usuário no item em múltiplas direções, em múltiplos formatos e com diversas mídias e recursos.">
                        <label class="form-check-label" for="indicador11c">
                            O enunciado e respostas promovem ações do usuário no item em múltiplas direções, em múltiplos formatos e com diversas mídias e recursos.
                        </label>
                    </div>
                </fieldset>
            </section>

            <textarea id="campo_observacao" name="observacao" rows="5" cols="33" placeholder="Observações"></textarea>
            <div class="notas_rodape">
                <b>Nota de Rodapé:</b>
                <p> e-Val: Avaliação da interatividade em itens digitais
                    Pesquisadoras: Dra. Liamara Scortegagna (UFJF) e Dra. Adriana Bruno (UNIRIO).
                    Projeto de pesquisa: Itens digitais e interativos em e-Avaliação de larga escala: processos cognitivos,
                    estratégias e produtos didáticos
                    na relação entre meio impresso e meio digital (2020/2021).
                    Financiamento: Centro de Políticas Públicas e Avaliação da Educação da Universidade Federal de Juiz
                    de Fora
                    (CAEd/UFJF).
                </p>
            </div>
            <div class="form-group justify-content-end d-flex">
                <input class="btn btn-primary ml-3" type="button" value="Imprimir" onclick="geradorpdf()">
                <input class="btn btn-primary ml-3" type="submit" value="Enviar">
            </div>
        </form>
    </div>
</div>

@endsection