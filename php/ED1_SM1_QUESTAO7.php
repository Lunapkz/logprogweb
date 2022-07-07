<?php
// input

$pi=3.14;
$r=3;


// processamento

 $d=2*$r;;
 $a=$pi*($r*$r);
 $pr=(2*$pi)*$r;

// outpunt

echo "<H1> SEMANA 1 </H1>";
echo "<FONT color=black>";
echo "<P> 7-Faça um algoritmo em PHP que receba o tamanho do raio de um círculo e faça o cálculo do diâmetro, do perímetro e da área do círculo. Calcule também o volume se esse círculo fosse a base para se criar uma esfera.<P>";
print "<BR> RAIO É : ".$r ;
print "<BR> PI É : ".$pi ;
print "<BR> DIAMENTRO É : ".$d ;
print "<BR> AREA  É : ".$a ;
print "<BR> PERIMETRO  É : ".$pr ;
echo "</FONT> ";
echo "<BR> <BR> FIM";

?>