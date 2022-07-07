<?php
// input

$vl=10;
$mt=3.6;


// processamento

 $ms= $vl/$mt;
 $mk= $vl*$mt;

// outpunt

echo "<H1> SEMANA 1 </H1>";
echo "<FONT color=black>";
echo "<P> 8-Faça um algoritmo em PHP no caderno ou no editor de texto (VSCode / Notepad ) que receba a velocidade de um veículo em Km/h (quilômetros por hora) e a transforme em m/s (metros por segundo). <P>";
print "<BR> A velocidade de km/h para m/s é de : ".$ms ;
print "<BR> A velocidade de m/s para km/h é de : ".$mk;
echo " <BR> <BR> Ultilizando 10 como valor base tanto para m/s como km/h.";
echo "</FONT> ";
echo "<BR> <BR> FIM";

?>