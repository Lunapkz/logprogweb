function somar() {
    //recuperação de dados

    var numero1 = parseFloat(document.getElementById("num1").value);
    var numero2 = parseFloat(document.getElementById("num2").value);
    var numero3 = parseFloat(document.getElementById("num3").value);

    //processamento

    var somar = (numero1 + numero2 + numero3);

    console.log(somar);

    //saida
    document.getElementById("soma").value = somar;
}

function somarAlert() {
    //recuperação de entrada de dados

    var numero1 = parseFloat(window.prompt("Digite o 1º número: ", "0"));
    var numero2 = parseFloat(window.prompt("Digite o 2º número: ", "0"));
    var numero3 = parseFloat(window.prompt("Digite o 3º número: ", "0"));
    var numero4 = parseFloat(window.prompt("Digite o 4º número: ", "0"));

    //processamento
    var soma = numero1 + numero2 + numero3 + numero4;

    console.log(soma);

    //saida
    window.alert("A soma é " + soma);
}
function med() {
    //recuperação de entrada de dados

    var numero1 = parseFloat(document.getElementById("num1").value);
    var numero2 = parseFloat(document.getElementById("num2").value);
    var numero3 = parseFloat(document.getElementById("num3").value);
    var numero4 = parseFloat(document.getElementById("num4").value);

    //processamento
    var soma = numero1 + numero2 + numero3 + numero4;
    var media = soma / 4;

    console.log(media);

    //saida
    document.getElementById("media").value = media;

}
function mediaAlert() {
    //recuperação de entrada de dados

    var numero1 = parseFloat(window.prompt("Digite o 1º número: ", "0"));
    var numero2 = parseFloat(window.prompt("Digite o 2º número: ", "0"));
    var numero3 = parseFloat(window.prompt("Digite o 3º número: ", "0"));
    var numero4 = parseFloat(window.prompt("Digite o 4º número: ", "0"));

    //processamento
    var soma = numero1 + numero2 + numero3 + numero4;
    var media = soma / 4;

    console.log(media);

    //saida
    window.alert("A Média é " + media);

}
function pesonota() {
    //recuperação de entrada de dados

    let nota1 = parseFloat(document.getElementById("nota1").value);
    let peso1 = parseFloat(document.getElementById("peso1").value);
    let nota2 = parseFloat(document.getElementById("nota2").value);
    let peso2 = parseFloat(document.getElementById("peso2").value);

    //processamento

    let media = ((nota1 * peso1) + (nota2 * peso2)) / (peso1 + peso2);

    console.log(media);

    //saida
    document.getElementById("media").value = media;
}
function pesonotaAlert() {
    //recuperação de entrada de dados

    var nota1 = parseFloat(window.prompt("Digite a 1ª nota: ", "0"));
    var peso1 = parseFloat(window.prompt("Digite o peso da 1ª nota: ", "0"));
    var nota2 = parseFloat(window.prompt("Digite a 2ª nota: ", "0"));
    var peso2 = parseFloat(window.prompt("Digite o peso da 2ª nota: ", "0"));

    //processamento

    var media = ((nota1 * peso1) + (nota2 * peso2)) / (peso1 + peso2);

    console.log(media);

    //saida
    window.alert("A Média é " + media);

}

function calculaArea2() {
    //recuperação de entradas de dados
    var bas = document.getElementById("base").value;
    let alt = document.getElementById("altura").value;

    //processamento
    var area = (base * altura) / 2;

    //saida
    document.getElementById("area").value = area;
}

function novosalario() {

}
