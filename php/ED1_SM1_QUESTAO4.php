<?php
// input
$sa=1000; 
$ps=10;

//  processamento

$sn= $sa+($sa*$ps)/100;

//outpunt

echo "<H1> SEMANA 1 </H1>";
echo "<FONT color=black>";
echo "<P> 4-Faça um algoritmo PHP no caderno ou no editor de texto (VSCode / Notepad ) que receba o salário inicial, a porcentagem de aumento e calcule o novo salário.";
print " <BR> <BR> Seu novo salario é : ".$sn ;
print " pois houve um reajuste de ".$ps  ;
echo " porcento.";
echo "</FONT> ";
echo "<BR> <BR> FIM";

?>

