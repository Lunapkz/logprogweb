<?php
// input

$nota1=10;
$nota2=7.5;

$peso1=1;
$peso2=2;

// processamento

$media= ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1+$peso2); 

// outpunt

echo "<H1> SEMANA 1 </H1>";
echo "<FONT color=black>";
echo "<P> 3-Faça um algoritmo PHP no caderno ou no editor de texto (VSCode / Notepad ) que receba duas notas de prova, seus respectivos pesos e calcule a média ponderada deles.<P>";
print "<BR> A média ponderada dos valores obtidos é: ".round($media,2) ;
echo "</FONT> ";
echo "<BR> <BR> FIM";

?>