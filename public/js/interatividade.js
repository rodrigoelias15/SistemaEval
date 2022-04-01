
function indicador1() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador1a");
    var item_b = document.getElementById("indicador1b");
    var item_c = document.getElementById("indicador1c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 3*somatorio;
    }
    else {
        return 0;
    }
}

function indicador2() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador2a");
    var item_b = document.getElementById("indicador2b");
    var item_c = document.getElementById("indicador2c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 3*somatorio;
    }
    else {
        return 0;
    }
}

function indicador3() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador3a");
    var item_b = document.getElementById("indicador3b");
    var item_c = document.getElementById("indicador3c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 2*somatorio;
    }
    else {
        return 0;
    }
}

function indicador4() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador4a");
    var item_b = document.getElementById("indicador4b");
    var item_c = document.getElementById("indicador4c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 3*somatorio;
    }
    else {
        return 0;
    }
}

function indicador5() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador5a");
    var item_b = document.getElementById("indicador5b");
    var item_c = document.getElementById("indicador5c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 1*somatorio;
    }
    else {
        return 0;
    }
}

function indicador6() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador6a");
    var item_b = document.getElementById("indicador6b");
    var item_c = document.getElementById("indicador6c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 2*somatorio;
    }
    else {
        return 0;
    }
}

function indicador7() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador7a");
    var item_b = document.getElementById("indicador7b");
    var item_c = document.getElementById("indicador7c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 3*somatorio;
    }
    else {
        return 0;
    }
}

function indicador8() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador8a");
    var item_b = document.getElementById("indicador8b");
    var item_c = document.getElementById("indicador8c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 2*somatorio;
    }
    else {
        return 0;
    }
}

function indicador9() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador9a");
    var item_b = document.getElementById("indicador9b");
    var item_c = document.getElementById("indicador9c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 2*somatorio;
    }
    else {
        return 0;
    }
}

function indicador10() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador10a");
    var item_b = document.getElementById("indicador10b");
    var item_c = document.getElementById("indicador10c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 3*somatorio;
    }
    else {
        return 0;
    }
}

function indicador11() {
    let conceito_criterio_baixo = 0;
    let conceito_criterio_mediano = 0;
    let conceito_criterio_alto = 0;
    let somatorio = 0;
    var item_a = document.getElementById("indicador11a");
    var item_b = document.getElementById("indicador11b");
    var item_c = document.getElementById("indicador11c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        conceito_criterio_baixo = 1;
        conceito_criterio_mediano = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        conceito_criterio_mediano = 2;
        conceito_criterio_baixo = 0;
        conceito_criterio_alto = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        conceito_criterio_alto = 3;
        conceito_criterio_baixo = 0;
        conceito_criterio_mediano = 0;
    }
    somatorio = conceito_criterio_baixo + conceito_criterio_mediano + conceito_criterio_alto;
    if (somatorio == 1 || somatorio == 2 || somatorio == 3) {
        return 1*somatorio;
    }
    else {
        return 0;
    }
}
function somaInteratividade() {
    var width = 0;
    var interatividadeTotal = ( (indicador1() + indicador2() + indicador3() + indicador4() + indicador5() + indicador6())/15 + (indicador7() + indicador8() + indicador9() + indicador10() + indicador11() )/14 )/2;

    var elem = document.getElementById("myBar");
    width = (interatividadeTotal/2.58)*100;
    elem.style.width = width.toFixed(2) + '%';
    elem.innerHTML = interatividadeTotal.toFixed(2);

    if (interatividadeTotal < 1.5) {
        document.getElementById("nivel_interatividade").innerHTML = "Baixa Interatividade";
    }
    else if (1.5 <= interatividadeTotal && interatividadeTotal < 2.5) {
        document.getElementById("nivel_interatividade").innerHTML = "Média Interatividade";
    }
    else if (interatividadeTotal >= 2.5) {
        document.getElementById("nivel_interatividade").innerHTML = "Alta Interatividade";
    }
    // document.getElementById("count").innerHTML = interatividadeTotal.toFixed(2);
    
}