
function retornaClassificacaoCriterio(item_a, item_b, item_c){
    
    let conceito_criterio_baixo, conceito_criterio_mediano, conceito_criterio_alto;
    
    if (item_a.checked == true) {
        conceito_criterio_baixo = 1;
        return conceito_criterio_baixo;
    }
    else if (item_b.checked == true) {
        conceito_criterio_mediano = 2;
        return conceito_criterio_mediano;
    }
    else if (item_c.checked == true) {
        conceito_criterio_alto = 3;
        return conceito_criterio_alto;
    }
    return 0;
}

function nivelCriterioIndicador1() {
    
    let classificacao_criterio;
    const item_a = document.getElementById("indicador1a");
    const item_b = document.getElementById("indicador1b");
    const item_c = document.getElementById("indicador1c");

    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function nivelCriterioIndicador2() {
    
    let classificacao_criterio;
    const item_a = document.getElementById("indicador2a");
    const item_b = document.getElementById("indicador2b");
    const item_c = document.getElementById("indicador2c");
    
    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function nivelCriterioIndicador3() {
    let classificacao_criterio;
    const item_a = document.getElementById("indicador3a");
    const item_b = document.getElementById("indicador3b");
    const item_c = document.getElementById("indicador3c");

    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function nivelCriterioIndicador4() {
    let classificacao_criterio;
    const item_a = document.getElementById("indicador4a");
    const item_b = document.getElementById("indicador4b");
    const item_c = document.getElementById("indicador4c");
    
    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function nivelCriterioIndicador5() {
    let classificacao_criterio;
    const item_a = document.getElementById("indicador5a");
    const item_b = document.getElementById("indicador5b");
    const item_c = document.getElementById("indicador5c");
    
    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function nivelCriterioIndicador6() {
    let classificacao_criterio;
    const item_a = document.getElementById("indicador6a");
    const item_b = document.getElementById("indicador6b");
    const item_c = document.getElementById("indicador6c");
    
    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function nivelCriterioIndicador7() {
    let classificacao_criterio;
    const item_a = document.getElementById("indicador7a");
    const item_b = document.getElementById("indicador7b");
    const item_c = document.getElementById("indicador7c");
    
    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function nivelCriterioIndicador8() {
    let classificacao_criterio;
    const item_a = document.getElementById("indicador8a");
    const item_b = document.getElementById("indicador8b");
    const item_c = document.getElementById("indicador8c");
    
    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function nivelCriterioIndicador9() {
    let classificacao_criterio;
    const item_a = document.getElementById("indicador9a");
    const item_b = document.getElementById("indicador9b");
    const item_c = document.getElementById("indicador9c");
    
    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function nivelCriterioIndicador10() {
    let classificacao_criterio;
    const item_a = document.getElementById("indicador10a");
    const item_b = document.getElementById("indicador10b");
    const item_c = document.getElementById("indicador10c");
    
    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function nivelCriterioIndicador11() {
    let classificacao_criterio;
    const item_a = document.getElementById("indicador11a");
    const item_b = document.getElementById("indicador11b");
    const item_c = document.getElementById("indicador11c");
   
    classificacao_criterio = retornaClassificacaoCriterio(item_a, item_b, item_c); // critério baixo, médio ou alto
    
    if (classificacao_criterio == 1 || classificacao_criterio == 2 || classificacao_criterio == 3) {
        return 3*classificacao_criterio;
    }
    else {
        return 0;
    }
}

function somaInteratividadeTotal() {
    var progresso = 0;
    var interatividadeTotal = 0;
    const nivel_interatividade = document.getElementById("nivel_interatividade").innerHTML;
    const elem = document.getElementById("myBar");
    
    interatividadeTotal = ( (nivelCriterioIndicador1() + nivelCriterioIndicador2() + nivelCriterioIndicador3() + nivelCriterioIndicador4() + nivelCriterioIndicador5() + nivelCriterioIndicador6())/15 + (nivelCriterioIndicador7() + nivelCriterioIndicador8() + nivelCriterioIndicador9() + nivelCriterioIndicador10() + nivelCriterioIndicador11() )/14 )/2;

    progresso = (interatividadeTotal/2.58)*100;
    elem.style.width = progresso.toFixed(2) + '%';
    
    if (interatividadeTotal < 1.5) {
        nivel_interatividade = "Baixa Interatividade";
        elem.innerHTML = 1; //interatividadeTotal.toFixed(2);
    }
    else if (1.5 <= interatividadeTotal && interatividadeTotal <= 2.5) {
        nivel_interatividade = "Média Interatividade";
        elem.innerHTML = 2; //interatividadeTotal.toFixed(2);
    }
    else if (interatividadeTotal > 2.5) {
        nivel_interatividade = "Alta Interatividade";
        elem.innerHTML = 3; //interatividadeTotal.toFixed(2);
    }
    // document.getElementById("count").innerHTML = interatividadeTotal.toFixed(2);
    
}