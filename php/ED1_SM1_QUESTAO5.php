<?php
// input

$sb=1000;
$dp= 2;


// processamento

 $sbb= $sb+ ($dp*32);

 $sbbb= $sbb- ($sbb*27.5)/100;


// outpunt

echo "<H1> SEMANA 1 </H1>";
echo "<FONT color=black>";
echo "<P> 5-Faça um algoritmo PHP no caderno ou no editor de texto (VSCode / Notepad ) que receba o salário-base e a quantidade de dependentes, e calcule o salário.<P>";
print "<BR> O seu salario bruto é: ".$sbbb;
echo "</FONT> ";
echo "<BR> <BR> FIM";

?>