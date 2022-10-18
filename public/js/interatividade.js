
function retornaNivelInteratividadeIndicador(item_a, item_b, item_c){
    
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

function retornaValorIndicador1() {
    
    let nivel_interatividade;
    const grau_relevancia = 3;
    const item_a = document.getElementById("indicador1a");
    const item_b = document.getElementById("indicador1b");
    const item_c = document.getElementById("indicador1c");

    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function retornaValorIndicador2() {
    
    let nivel_interatividade;
    const grau_relevancia = 3;
    const item_a = document.getElementById("indicador2a");
    const item_b = document.getElementById("indicador2b");
    const item_c = document.getElementById("indicador2c");
    
    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function retornaValorIndicador3() {
    let nivel_interatividade;
    const grau_relevancia = 2;
    const item_a = document.getElementById("indicador3a");
    const item_b = document.getElementById("indicador3b");
    const item_c = document.getElementById("indicador3c");

    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function retornaValorIndicador4() {
    let nivel_interatividade;
    const grau_relevancia = 3;
    const item_a = document.getElementById("indicador4a");
    const item_b = document.getElementById("indicador4b");
    const item_c = document.getElementById("indicador4c");
    
    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function retornaValorIndicador5() {
    let nivel_interatividade;
    const grau_relevancia = 1;
    const item_a = document.getElementById("indicador5a");
    const item_b = document.getElementById("indicador5b");
    const item_c = document.getElementById("indicador5c");
    
    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function retornaValorIndicador6() {
    let nivel_interatividade;
    const grau_relevancia = 2;
    const item_a = document.getElementById("indicador6a");
    const item_b = document.getElementById("indicador6b");
    const item_c = document.getElementById("indicador6c");
    
    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function retornaValorIndicador7() {
    let nivel_interatividade;
    const grau_relevancia = 3;
    const item_a = document.getElementById("indicador7a");
    const item_b = document.getElementById("indicador7b");
    const item_c = document.getElementById("indicador7c");
    
    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function retornaValorIndicador8() {
    let nivel_interatividade;
    const grau_relevancia = 2;
    const item_a = document.getElementById("indicador8a");
    const item_b = document.getElementById("indicador8b");
    const item_c = document.getElementById("indicador8c");
    
    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function retornaValorIndicador9() {
    let nivel_interatividade;
    const grau_relevancia = 2;
    const item_a = document.getElementById("indicador9a");
    const item_b = document.getElementById("indicador9b");
    const item_c = document.getElementById("indicador9c");
    
    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function retornaValorIndicador10() {
    let nivel_interatividade;
    const grau_relevancia = 3;
    const item_a = document.getElementById("indicador10a");
    const item_b = document.getElementById("indicador10b");
    const item_c = document.getElementById("indicador10c");
    
    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function retornaValorIndicador11() {
    let nivel_interatividade;
    const grau_relevancia = 1;
    const item_a = document.getElementById("indicador11a");
    const item_b = document.getElementById("indicador11b");
    const item_c = document.getElementById("indicador11c");
   
    nivel_interatividade = retornaNivelInteratividadeIndicador(item_a, item_b, item_c);
    
    return grau_relevancia*nivel_interatividade;
}

function exibeNivelInteratividade() {
    
    let barra_progresso_width = 0;
    let nivel_interatividade = 0;
    let exibe_nivel_interatividade = document.getElementById("nivel_interatividade").innerHTML;
    const barra_progresso = document.getElementById("myBar");
    
    nivel_interatividade = (((retornaValorIndicador1() + retornaValorIndicador2() + retornaValorIndicador3() + retornaValorIndicador4() + retornaValorIndicador5() + retornaValorIndicador6())/15) + 
    ((retornaValorIndicador7() + retornaValorIndicador8() + retornaValorIndicador9() + retornaValorIndicador10() + retornaValorIndicador11())/14))/2;

    barra_progresso_width = ((nivel_interatividade/2.58)*100).toFixed(2) + '%';
    barra_progresso.style.width = barra_progresso_width;
    if (nivel_interatividade < 1.5) {
        exibe_nivel_interatividade = "Baixa Interatividade";
        barra_progresso.innerHTML = 1; // valor se mantém até que interatividade mude
    }
    else if (1.5 <= nivel_interatividade && nivel_interatividade < 2.5) {
        exibe_nivel_interatividade = "Média Interatividade";
        barra_progresso.innerHTML = 2; // valor se mantém até que interatividade mude
    }
    else if (nivel_interatividade > 2.5) {
        exibe_nivel_interatividade = "Alta Interatividade";
        barra_progresso.innerHTML = 3; // valor se mantém até que interatividade mude
    }

}