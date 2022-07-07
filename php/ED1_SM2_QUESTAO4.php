<?php
// input

$n1=10;
$n2=9;

// processamento

 $s = $n1+$n2;

 $m = $s /2;

 if ($m >= 7) {
    echo "<H1> SEMANA 1 </H1>";
    echo "<FONT color=black>";
    echo "<P> 4. Crie um algoritmo que leia duas notas para calcular a média do aluno e determinar se o mesmo foi aprovado ou reprovado. A média para aprovação é 7. <P>";
    print "<BR> A média é:   ".$m ;
    echo " <BR> ALUNO APROVADO !!! <BR> ";
 }

 else {
    echo "<H1> SEMANA 1 </H1>";
    echo "<FONT color=black>";
    echo "<P> 4. Crie um algoritmo que leia duas notas para calcular a média do aluno e determinar se o mesmo foi aprovado ou reprovado. A média para aprovação é 7. <P>";
    print "<BR> A média é:   ".$m   ;
    echo "<BR>  ALUNO REPROVADO !!! <BR> ";
 }

 // outpunt

echo "</FONT> ";
echo "<BR> <BR> FIM";

?>