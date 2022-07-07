<?php
//input


$nota1=0;
$nota2=5;


//processamento e output

$media = ($nota1+$nota2)/2 ;

if ($media >= 7) {

    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 4. Crie um algoritmo que leia a média das duas unidades para calcular a sua média final. Em seguida exiba a média final e o resultado que pode ser aprovado, prova final ou reprovado. A média de aprovação é 7, menor que 3 para reprovação e as demais prova final.";
    echo "<br> <br> Você foi aprovado e sua média é: ".$media;
    echo "</FONT> ";
    echo "<BR> <BR> FIM";
    
}
elseif ($media <= 3) {

    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 4. Crie um algoritmo que leia a média das duas unidades para calcular a sua média final. Em seguida exiba a média final e o resultado que pode ser aprovado, prova final ou reprovado. A média de aprovação é 7, menor que 3 para reprovação e as demais prova final.";
    echo "<br> <br> Você foi reprovado e sua média é: ".$media;
    echo "</FONT> ";
    echo "<BR> <BR> FIM";

}

?>