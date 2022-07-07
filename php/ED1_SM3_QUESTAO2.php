<?php
//input
$sb= 5000;
$ps1= 10;
$ps2= 20;

//processamento e output

if ($sb <=2000 ){

    $sl1= ($sb*$ps1)/100;
    $sl3= ($sb-$sl1);
    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 3. Crie um algoritmo que após receber o Salário Bruto, calcule o salário líquido descontando 10% quando o salário bruto for menor que R$ 2000, caso contrário descontar 20%. No final, exiba o salário líquido.";
    print " <BR> <BR> Seu novo salario é : ".$sl3 ;
    print " pois houve um reajuste de ".$ps1  ;
    echo " porcento.";
    echo "</FONT> ";
    echo "<BR> <BR> FIM";
    
}
else {

    $sl2= ($sb*$ps2)/100;
    $sl4= ($sb-$sl2);
    echo "<H1> SEMANA 3 </H1>";
    echo "<FONT color=black>";
    echo "<P> 3. Crie um algoritmo que após receber o Salário Bruto, calcule o salário líquido descontando 10% quando o salário bruto for menor que R$ 2000, caso contrário descontar 20%. No final, exiba o salário líquido.";
    print " <BR> <BR> Seu novo salario é : ".$sl4 ;
    print " pois houve um reajuste de ".$ps2  ;
    echo " porcento.";
    echo "</FONT> ";
    echo "<BR> <BR> FIM";
}


?>