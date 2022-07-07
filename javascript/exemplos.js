function calculaArea2() {
    //recuperação de entradas de dados
    var bas = parseInt(document.getElementById("bas").value);
    let alt = parseInt(document.getElementById("alt").value);

    //processamento

    var are = (bas * alt) / 2;

    document.getElementById("are").value = are;

}

function somar() {

    //recuperação de entradas de dados
    let num1 = parseInt(Document.getElementById("num1").value);
    let num2 = parseInt(Document.getElementById("num2").value);
    let num3 = parseInt(Document.getElementById("num3").value);
    let num4 = parseInt(Document.getElementById("num4").value);

    //processamento

    let somar = num1 + num2 + num3 + num4;

    document.getElementById("somar").value = somar;

}

function somarAlert() {
    //recuperação de entradas de dados
    var num1 = parseInt(window.prompt("Digite o número 1 :", "0"));
    var num2 = parseInt(window.prompt("Digite o número 2 :", "0"));
    var num3 = parseInt(window.prompt("Digite o número 3 :", "0"));
    var num4 = parseInt(window.prompt("Digite o número 4 :", "0"));

    //processamento

    var somar = num1 + num2 + num3 + num4;

    document.getElementById("somar").value = somar;

}