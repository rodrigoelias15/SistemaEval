
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

function realizaCalculoInteratividade() {
    
    let resultado = 0;
    let soma_indicadores_tecnologicos = 0;
    let soma_indicadores_pedagogicos = 0;
    const grau_relevancia_item1 = 3;
    const grau_relevancia_item2 = 3;
    const grau_relevancia_item3 = 2;
    const grau_relevancia_item4 = 3;
    const grau_relevancia_item5 = 1;
    const grau_relevancia_item6 = 2;
    const grau_relevancia_item7 = 3;
    const grau_relevancia_item8 = 2;
    const grau_relevancia_item9 = 2;
    const grau_relevancia_item10 = 3;
    const grau_relevancia_item11 = 1;

    soma_indicadores_tecnologicos = grau_relevancia_item1*retornaNivelInteratividadeIndicador1() + grau_relevancia_item2*retornaNivelInteratividadeIndicador2() + grau_relevancia_item3*retornaNivelInteratividadeIndicador3() + grau_relevancia_item4*retornaNivelInteratividadeIndicador4() + grau_relevancia_item5*retornaNivelInteratividadeIndicador5() + grau_relevancia_item6*retornaNivelInteratividadeIndicador6();

    soma_indicadores_pedagogicos = grau_relevancia_item7*retornaNivelInteratividadeIndicador7() + grau_relevancia_item8*retornaNivelInteratividadeIndicador8() + grau_relevancia_item9*retornaNivelInteratividadeIndicador9() + grau_relevancia_item10*retornaNivelInteratividadeIndicador10() + grau_relevancia_item11*retornaNivelInteratividadeIndicador11();

    resultado = (soma_indicadores_tecnologicos/14 + soma_indicadores_pedagogicos/11)/2;

    return resultado.toFixed(2);
}

function exibeNivelInteratividade() {
    
    let barra_progresso_width = 0;
    let nivel_interatividade = realizaCalculoInteratividade();
    const elem_nivel_interatividade = document.getElementById("nivel_interatividade");
    const elem_barra_progresso = document.getElementById("myBar");    

    barra_progresso_width = ((nivel_interatividade)/2.58)*100 + '%';
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