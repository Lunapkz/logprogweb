<?php
//input

$num1= 1;
$num2= 4;
$num3= 9;


echo "<H1> SEMANA 4 </H1>";
echo "<FONT color=black>";
echo "<P> 1. Crie um algoritmo que leia três números e exibe os números em ordem crescente.  <br> <br> ";

// processsamento

if (($num1 == $num2 and $num2 == $num3) or ( $num1 == $num3)) {
   
    echo "<br> <br> Número idênticos! ";
    
     
}   

if ( $num1 < $num2 and $num1 < $num3 ) {
    echo "A ordem crescente destes números é: <br> $num1 <br>";

    if ( $num2 < $num3  ) {
        echo "$num2 <br> $num3 <br>  ";
    }
        else {
           echo "$num3 <br> $num2 <br>  ";
        }
}

elseif ( $num2 < $num1 and $num2 < $num3 ) {
            echo "A ordem crescente destes números é: <br> $num2 <br>";

            if ( $num1 < $num3  ) {
                echo "$num1 <br> $num3 <br>  ";
            }
                else {
                   echo "$num3 <br> $num1 <br>  ";
                }
}            
 else  {
    echo "A ordem crescente destes números é: <br> $num3 <br>";
        if ( $num1 < $num2  ) {
            echo "$num1 <br> $num2 <br>  ";
        }
        else {
            echo "$num2 <br> $num1 <br>  ";
        }
    }
            
    echo "</FONT> ";
    echo "<BR> <BR> FIM";            

?>