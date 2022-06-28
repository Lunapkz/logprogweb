function calculaArea2() {
    //recuperação de entradas de dados
    var bas = document.getElementById("bas").value;
    let alt = document.getElementById("alt").value;

    //processamento

    var are = (bas * alt) / 2;

    document.getElementById("are").value = are;

}
