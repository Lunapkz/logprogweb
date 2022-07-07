<?php
//input
$valordacompra = 800;
$valordopagamento = 700;
$troco= $valordopagamento - $valordacompra;

echo "<H1> SEMANA 4 </H1>";
echo "<FONT color=black>";
echo "<P> 4. Suponha que um caixa disponha apenas de notas de 1, 10 e 100.Considerando que alguém está pagando uma compra. escreva um algoritmo que mostre o número mínimo de cada nota que o caixa dev fornecer como troco. O algoritmo receberá como entrada o Valor da Compra e Valor do pagamento, ambos os valores são inteiro. Caso o valor do pagamento seja inferior ao valor da compra o cálculo não será efetuado deverá imprimir a seguinte mensagem: “Pagamento Negado”.<p>";


if ( $troco < 0 ){
    echo "Pagamento Negado";
}
else {
    $notasde100 = intdiv ( $troco , 100);
    $resto1 = $troco % 100;
    $notasde10 = intdiv ($resto1 , 10);
    $resto2 = $resto1 % 10 ;
    $notasde1 = intdiv ($resto2 , 1);
    echo "Neste caso deve exibir ${notasde100} notas de R$ 100, ${notasde10} notas de R$ 10 e ${notasde1}  notas de R$ 1.";
}
echo "</FONT> ";
echo "<BR> <BR> FIM";
?>