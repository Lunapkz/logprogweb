<?php
//input

$custo=200;

//processamento e output

if ($custo <=200){
    $hipotesedelucro1 = ($custo*50)/100;
    $custofinal1 = ($custo+$hipotesedelucro1);
    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 3. Um comerciante comprou um produto e quer vendê-lo com um lucro de 50% se o valor da compra for menor que R$ 200, caso contrário o lucro será de 30%. Crie um algoritmo que leia o valor da compra e exiba o valor da venda.";
    echo "<br> <br> O valor do produto final será de: ".$custofinal1;    
    echo "</FONT> ";
    echo "<BR> <BR> FIM";
}
else {
    $hipotesedelucro2 = ($custo*30)/100;
    $custofinal2= ($custo + $hipotesedelucro2);
    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 3. Um comerciante comprou um produto e quer vendê-lo com um lucro de 50% se o valor da compra for menor que R$ 200, caso contrário o lucro será de 30%. Crie um algoritmo que leia o valor da compra e exiba o valor da venda.";
    echo "<br> <br> O valor do produto final será de: ".$custofinal2;    
    echo "</FONT> ";
    echo "<BR> <BR> FIM";
}
?>