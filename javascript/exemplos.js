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
function novosalario() {
    //recuperação de entrada de dados
    let salarioinicial = parseFloat(document.getElementById("salarioinicial").value);
    let porcentagem = parseFloat(document.getElementById("porcentagem").value);

    //processamento

    let novosalario = salarioinicial + (salarioinicial * porcentagem) / 100;

    console.log(novosalario);

    //saida
    document.getElementById("novosalarioex").value = novosalario;

}
function novosalarioAlert() {
    //recuperação de entrada de dados
    let salarioinicial = parseFloat(window.prompt("Salário Inicial: "));
    let porcentagem = parseFloat(window.prompt("Porcetagem de Aumento: "));

    //processamento

    let novosalario = salarioinicial + (salarioinicial * porcentagem) / 100;

    //saida
    window.alert("O seu novo salário é: " + novosalario);

}
function salarioliquid() {
    var salbruto = parseFloat(document.getElementById("salbruto").value);
    var dependen = parseFloat(document.getElementById("dependen").value);
    var salfamil = parseFloat(document.getElementById("salfamil").value);
    var imposto = parseFloat(document.getElementById("imposto").value);

    //processamento
    var calc1 = salbruto + (dependen * salfamil);

    var salarioliquido = calc1 - (calc1 * imposto) / 100;

    console.log(salarioliquido);

    //saida
    document.getElementById("salarioliquido").value = salarioliquido;

}
function salarioliquidoAlert() {
    //recuperação de entrada de dados

    let salariobase = parseFloat(window.prompt("Salário Bruto: "));
    let dependentes = parseFloat(window.prompt("Número de Dependentes: "));
    let salariofami = parseFloat(window.prompt("Salário Família: "));
    let imposto = parseFloat(window.prompt("Imposto: "));

    //processamento

    var salariobruto = salariobase + (dependentes * salariofami);

    var salarioliquido = salariobruto - (salariobruto * imposto) / 100;

    console.log(salarioliquido);

    //saida
    window.alert("O seu salário liquido é: " + salarioliquido);
}
function novovalor() {

    var valoranti = parseFloat(document.getElementById("valoranti").value);
    var valornovo = parseFloat(document.getElementById("valornovo").value);

    var aumento = ((valornovo - valoranti) / valoranti) * 100;

    console.log(aumento);
    //saida
    document.getElementById("novovalorr").value = aumento;

}
function novovalorAlert() {

    let valoranti = parseFloat(window.prompt("O valor Antigo do Produto: "));
    let valornovo = parseFloat(window.prompt("O valor Novo do Produto: "));

    var aumento = ((valornovo - valoranti) / valoranti) * 100;

    console.log(aumento);

    //saida
    window.alert("A porcentagem de aumento  é: " + aumento + "%");

}
function raioo() {

    var pi = parseFloat(document.getElementById("pi").value);
    var raio = parseFloat(document.getElementById("raio").value);


    var perimetro = 2 * pi * raio;
    var diametro = 2 * raio;
    var area = pi * (raio * raio);
    var volume = (4 * pi * (raio * raio * raio)) / 3;

    //saida
    document.getElementById("perimetro").value = perimetro;
    document.getElementById("diametro").value = diametro;
    document.getElementById("area").value = diametro;
    document.getElementById("volume").value = volume;

}

function raioAlert() {
    //recuperação de entradas de dados
    let raio = parseFloat(window.prompt("Tamanho do Raio: "));

    //processamento
    var pi = 3.1415;
    var perimetro = 2 * pi * raio;
    var diametro = 2 * raio;
    var area = pi * (raio * raio);
    var volume = (4 * pi * (raio * raio * raio)) / 3;


    //saida
    window.alert("Diâmetro: " + diametro);
    window.alert("Perimetro: " + perimetro);
    window.alert("Área: " + area);
    window.alert("Volume: " + volume);

}

function sd() {

}
