
let soma = 0;

function indicador1() {
    let baixa = 0;
    let media = 0;
    let alta = 0;
    var item_a = document.getElementById("indicador1a");
    var item_b = document.getElementById("indicador1b");
    var item_c = document.getElementById("indicador1c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        baixa = 5;
        media = 0;
        alta = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        media = 10;
        baixa = 0;
        alta = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        alta = 15;
        baixa = 0;
        media = 0;
    }
    soma = baixa + media + alta;   
    return soma;
}

function indicador2() {
    let baixa = 0;
    let media = 0;
    let alta = 0;
    var item_a = document.getElementById("indicador2a");
    var item_b = document.getElementById("indicador2b");
    var item_c = document.getElementById("indicador2c");
    if (item_a.checked == true && item_b.checked == false && item_c.checked == false) {
        baixa = 5;
        media = 0;
        alta = 0;
    }
    else if (item_a.checked == false && item_b.checked == true && item_c.checked == false) {
        media = 10;
        baixa = 0;
        alta = 0;
    }
    else if (item_a.checked == false && item_b.checked == false && item_c.checked == true) {
        alta = 15;
        baixa = 0;
        media = 0;
    }
    soma = baixa + media + alta;
    return soma;
}

function somatorio() {
    return indicador1() + indicador2();
}

var somatoriovar = somatorio();

document.getElementById("count").innerHTML = somatoriovar;

if (somatoriovar < 40){
    document.getElementById("teste").innerHTML = "Baixa Interatividade";
}
else if (somatoriovar >= 40 && somatoriovar < 70){
    document.getElementById("teste").innerHTML = "Média Interatividade";
}
else if (somatoriovar >= 70 && somatoriovar <= 100){
    document.getElementById("teste").innerHTML = "Alta Interatividade";
}
