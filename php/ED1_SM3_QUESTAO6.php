<?php

//input
$num1=7;
$num2=7;
$num3=9;

//processamento

if (($num1 == $num2 and $num2 == $num3) or ( $num1 == $num3)) {
    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 6. Crie um algoritmo que leia três números e exibe o maior deles. Caso os números sejam iguais exibir a seguinte mensagem: “Número idênticos”.";
    echo "<br> <br> Número idênticos! ";
    echo "</FONT> ";
    echo "<BR> <BR> FIM"; 
     
}   


if ( $num1 > $num2 and $num1 > $num3 ) {

    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 6. Crie um algoritmo que leia três números e exibe o maior deles. Caso os números sejam iguais exibir a seguinte mensagem: “Número idênticos”.";
    echo "<br> <br> O número maior dos apresentados é:  ".$num1;
    echo "</FONT> ";
    echo "<BR> <BR> FIM"; 

}

if ($num2 > $num1 and $num2 > $num3 ){
    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 6. Crie um algoritmo que leia três números e exibe o maior deles. Caso os números sejam iguais exibir a seguinte mensagem: “Número idênticos”.";
    echo "<br> <br> O número maior dos apresentados é:  ".$num2;
    echo "</FONT> ";
    echo "<BR> <BR> FIM";  
}

if ($num3 > $num1 and $num3 > $num2 ){
    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 6. Crie um algoritmo que leia três números e exibe o maior deles. Caso os números sejam iguais exibir a seguinte mensagem: “Número idênticos”.";
    echo "<br> <br> O número maior dos apresentados é:  ".$num3;
    echo "</FONT> ";
    echo "<BR> <BR> FIM";  
}

?>