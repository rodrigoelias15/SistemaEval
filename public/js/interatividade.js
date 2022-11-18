
function retornaNivelInteratividade(item_a, item_b, item_c){
    
    let nivel_interatividade_baixo, nivel_interatividade_medio, nivel_interatividade_alto;
    
    if (item_a.checked == true) {
        nivel_interatividade_baixo = 1;
        return nivel_interatividade_baixo;
    }
    else if (item_b.checked == true) {
        nivel_interatividade_medio = 2;
        return nivel_interatividade_medio;
    }
    else if (item_c.checked == true) {
        nivel_interatividade_alto = 3;
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

function realizaCalculoInteratividade() {
    
    let resultado = 0;
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

    resultado = ((soma_produtos_indicadores_tecnologicos/soma_graus_relevancia_tecnologicos) + (soma_produtos_indicadores_pedagogicos/soma_graus_relevancia_pedagogicos))/2;

    return resultado.toFixed(2);
}

function exibeNivelInteratividade() {
    
    let barra_progresso_width = 0;
    let nivel_interatividade = realizaCalculoInteratividade();
    const elem_nivel_interatividade = document.getElementById("nivel_interatividade");
    const elem_barra_progresso = document.getElementById("myBar");
    
    barra_progresso_width = (100*nivel_interatividade)/3 + '%'; // calculo da porcentagem, 3 é o maximo que interatividade pode alcançar
    elem_barra_progresso.style.width = barra_progresso_width;

    if (nivel_interatividade < 1.5) {
        elem_nivel_interatividade.innerHTML = "Baixa Interatividade";
        elem_barra_progresso.innerHTML = 1;
    }
    else if (1.5 <= nivel_interatividade && nivel_interatividade < 2.5) {
        elem_nivel_interatividade.innerHTML = "Média Interatividade";
        elem_barra_progresso.innerHTML = 2;
    }
    else if (nivel_interatividade > 2.5) {
        elem_nivel_interatividade.innerHTML = "Alta Interatividade";
        elem_barra_progresso.innerHTML = 3;
    }

}