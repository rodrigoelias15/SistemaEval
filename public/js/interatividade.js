
function retornaNivelInteratividade(item_a, item_b, item_c){
    
    let nivel_interatividade_baixo = 1;
    let nivel_interatividade_medio = 2;
    let nivel_interatividade_alto = 3;
    
    if (item_a.checked == true) {
        return nivel_interatividade_baixo;
    }
    else if (item_b.checked == true) {
        return nivel_interatividade_medio;
    }
    else if (item_c.checked == true) {
        return nivel_interatividade_alto;
    }
    return 0;
}

function retornaNivelInteratividadeIndicador1() {
    
    let nivel_interatividade;
    const item_a = document.getElementById("indicador1a");
    const item_b = document.getElementById("indicador1b");
    const item_c = document.getElementById("indicador1c");

    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador2() {
    
    let nivel_interatividade;
    const item_a = document.getElementById("indicador2a");
    const item_b = document.getElementById("indicador2b");
    const item_c = document.getElementById("indicador2c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador3() {
   
    let nivel_interatividade;
    const item_a = document.getElementById("indicador3a");
    const item_b = document.getElementById("indicador3b");
    const item_c = document.getElementById("indicador3c");

    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador4() {
   
    let nivel_interatividade;
    const item_a = document.getElementById("indicador4a");
    const item_b = document.getElementById("indicador4b");
    const item_c = document.getElementById("indicador4c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador5() {
   
    let nivel_interatividade;
    const item_a = document.getElementById("indicador5a");
    const item_b = document.getElementById("indicador5b");
    const item_c = document.getElementById("indicador5c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador6() {
   
    let nivel_interatividade;
    const item_a = document.getElementById("indicador6a");
    const item_b = document.getElementById("indicador6b");
    const item_c = document.getElementById("indicador6c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador7() {
   
    let nivel_interatividade;
    const item_a = document.getElementById("indicador7a");
    const item_b = document.getElementById("indicador7b");
    const item_c = document.getElementById("indicador7c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador8() {
   
    let nivel_interatividade;
    const item_a = document.getElementById("indicador8a");
    const item_b = document.getElementById("indicador8b");
    const item_c = document.getElementById("indicador8c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador9() {
    
    let nivel_interatividade;
    const item_a = document.getElementById("indicador9a");
    const item_b = document.getElementById("indicador9b");
    const item_c = document.getElementById("indicador9c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador10() {
    
    let nivel_interatividade;
    const item_a = document.getElementById("indicador10a");
    const item_b = document.getElementById("indicador10b");
    const item_c = document.getElementById("indicador10c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador11() {
   
    let nivel_interatividade;
    const item_a = document.getElementById("indicador11a");
    const item_b = document.getElementById("indicador11b");
    const item_c = document.getElementById("indicador11c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador12() {
   
    let nivel_interatividade;
    const item_a = document.getElementById("indicador12a");
    const item_b = document.getElementById("indicador12b");
    const item_c = document.getElementById("indicador12c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function retornaNivelInteratividadeIndicador13() {
   
    let nivel_interatividade;
    const item_a = document.getElementById("indicador13a");
    const item_b = document.getElementById("indicador13b");
    const item_c = document.getElementById("indicador13c");
    
    nivel_interatividade = retornaNivelInteratividade(item_a, item_b, item_c);
    
    return nivel_interatividade;
}

function calculaInteratividade() {
    
    let resultadoFinal;
    let valorInteratividade = 0;
    let soma_produtos_indicadores_tecnologicos = 0;
    let soma_produtos_indicadores_pedagogicos = 0;
    let soma_graus_relevancia_tecnologicos = 0;
    let soma_graus_relevancia_pedagogicos = 0;
    const grau_relevancia_indicador1 = 3;
    const grau_relevancia_indicador2 = 3;
    const grau_relevancia_indicador3 = 3;
    const grau_relevancia_indicador4 = 3;
    const grau_relevancia_indicador5 = 3;
    const grau_relevancia_indicador6 = 3;
    const grau_relevancia_indicador7 = 3;
    const grau_relevancia_indicador8 = 3;
    const grau_relevancia_indicador9 = 3;
    const grau_relevancia_indicador10 = 3;
    const grau_relevancia_indicador11 = 3;
    const grau_relevancia_indicador12 = 3;
    const grau_relevancia_indicador13 = 3;

    soma_graus_relevancia_tecnologicos = grau_relevancia_indicador1 + grau_relevancia_indicador2 + grau_relevancia_indicador3 + grau_relevancia_indicador4 + grau_relevancia_indicador5 + grau_relevancia_indicador6 + grau_relevancia_indicador7;
    
    soma_graus_relevancia_pedagogicos = grau_relevancia_indicador8 + grau_relevancia_indicador9 + grau_relevancia_indicador10 + grau_relevancia_indicador11 + grau_relevancia_indicador12 + grau_relevancia_indicador13;
    
    soma_produtos_indicadores_tecnologicos = grau_relevancia_indicador1*retornaNivelInteratividadeIndicador1() + grau_relevancia_indicador2*retornaNivelInteratividadeIndicador2() + grau_relevancia_indicador3*retornaNivelInteratividadeIndicador3() + grau_relevancia_indicador4*retornaNivelInteratividadeIndicador4() + grau_relevancia_indicador5*retornaNivelInteratividadeIndicador5() + grau_relevancia_indicador6*retornaNivelInteratividadeIndicador6() + grau_relevancia_indicador7*retornaNivelInteratividadeIndicador7();

    soma_produtos_indicadores_pedagogicos =  grau_relevancia_indicador8*retornaNivelInteratividadeIndicador8() + grau_relevancia_indicador9*retornaNivelInteratividadeIndicador9() + grau_relevancia_indicador10*retornaNivelInteratividadeIndicador10() + grau_relevancia_indicador11*retornaNivelInteratividadeIndicador11() + grau_relevancia_indicador12*retornaNivelInteratividadeIndicador12() + grau_relevancia_indicador13*retornaNivelInteratividadeIndicador13();

    valorInteratividade = ((soma_produtos_indicadores_tecnologicos/soma_graus_relevancia_tecnologicos) + (soma_produtos_indicadores_pedagogicos/soma_graus_relevancia_pedagogicos))/2;

    resultadoFinal = valorInteratividade.toFixed(2);
    
    return resultadoFinal;
}

function classificaNivelInteratividade() {
    
    let resultadoFinal = calculaInteratividade();
    const numInteratividade = document.getElementById("interatividade");
    const classificacaoInteratividade = document.getElementById("classificacaoInteratividade");

    if (resultadoFinal < 1.5) {
        classificacaoInteratividade.value = "Baixa Interatividade";
    }
    else if (1.5 <= resultadoFinal && resultadoFinal < 2.5) {
        classificacaoInteratividade.value = "Média Interatividade";
    }
    else if (resultadoFinal > 2.5) {
        classificacaoInteratividade.value = "Alta Interatividade";
    }
    
    numInteratividade.value = resultadoFinal;    
}

function calculaPorcentagemBarraProgresso(nivel_interatividade) {
    
    let tamBarraProgresso = (100*nivel_interatividade)/3 + '%'; // calculo da porcentagem da barra de progresso
    return tamBarraProgresso;
}

function exibeBarraProgressoInteratividade() {
    
    let nivel_interatividade = calculaInteratividade();
    const barraProgresso = document.getElementById("barraProgresso");
    const classificacaoInteratividade = document.getElementById("classificacaoInteratividadeBarra");
    
    classificaNivelInteratividade();
    barraProgresso.style.width = calculaPorcentagemBarraProgresso(nivel_interatividade); // tamanho dinâmico da barra
    
    if (nivel_interatividade < 1.5) {
        classificacaoInteratividade.innerHTML = "Baixa Interatividade";
        barraProgresso.innerHTML = 1;
    }
    else if (1.5 <= nivel_interatividade && nivel_interatividade < 2.5) {
        classificacaoInteratividade.innerHTML = "Média Interatividade";
        barraProgresso.innerHTML = 2;
    }
    else if (nivel_interatividade > 2.5) {
        classificacaoInteratividade.innerHTML = "Alta Interatividade";
        barraProgresso.innerHTML = 3;
    }
}