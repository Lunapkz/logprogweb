<?php

//input
$lado1 = 2;
$lado2 = 1;
$lado3 = 2;


//processamento

if ($lado1 == $lado2 and $lado3 == $lado1){

    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 5. Crie um algoritmo que leia três lados de um triângulo e determine se ele é equilátero, isósceles ou escaleno. Quando os três lados forem iguais trata-se de um triângulo equilátero, dois lados iguais é um triângulo isósceles e os três lados diferentes é um triângulo escaleno.";
    echo "<br> <br> Este valores formam um equilátero! ";
    echo "</FONT> ";
    echo "<BR> <BR> FIM";   
}
elseif (($lado1 == $lado2 and $lado3 != $lado1 ) or ($lado1 != $lado2 and  $lado3 == $lado1 )){

    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 5. Crie um algoritmo que leia três lados de um triângulo e determine se ele é equilátero, isósceles ou escaleno. Quando os três lados forem iguais trata-se de um triângulo equilátero, dois lados iguais é um triângulo isósceles e os três lados diferentes é um triângulo escaleno.";
    echo "<br> <br> Este valores formam um triângulo isósceles! ";
    echo "</FONT> ";
    echo "<BR> <BR> FIM";
}
else{

    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 5. Crie um algoritmo que leia três lados de um triângulo e determine se ele é equilátero, isósceles ou escaleno. Quando os três lados forem iguais trata-se de um triângulo equilátero, dois lados iguais é um triângulo isósceles e os três lados diferentes é um triângulo escaleno.";
    echo "<br> <br> Este valores formam um escaleno! ";
    echo "</FONT> ";
    echo "<BR> <BR> FIM";

}
?>