<?php
// input
$percursoemkm = 35;
$tipodecarro = "A";

echo "<H1> SEMANA 4 </H1>";
echo "<FONT color=black>";
echo "<P> 3. Crie um algoritmo que leia o percurso em quilômetros, o tipo do carro e informe o consumo estimado de combustível, sabendo-se que um carro do tipo C faz 12 KM com um litro de gasolina, um tipo B faz 9 KM e o tipo A faz 8 KM. Caso seja fornecido um tipo de carro inválido o algoritmo deve alertar o fato.<p>";

//Processamento
switch ($tipodecarro) {
    case "C": $exibir1 = $percursoemkm / 12;
        echo " Seu veiculo é do tipo C e estima-se uma gasto de ". round($exibir1,2 ) ;
    echo " litros de gasolina.";
        break;
    case "c": $exibir2 = $percursoemkm / 12;
         echo " Seu veiculo é do tipo C e estima-se uma gasto de ". round($exibir2,2 );
        echo " litros de gasolina.";
        break;
    case "B": $exibir3 = $percursoemkm / 9;
        echo " Seu veiculo é tipo B e estima-se uma gasto de ". round($exibir3,2 );
    echo " litros de gasolina.";
        break;
    case "b": $exibir4 = $percursoemkm / 9;
        echo " Seu veiculo é do tipo B e estima-se uma gasto de ". round($exibir4,2 );
    echo " litros de gasolina.";
        break;
    case "A": $exibir5 = $percursoemkm / 8;
    echo " Seu veiculo é do tipo A e estima-se uma gasto de ". round($exibir5,2 );
    echo " litros de gasolina.";
        break;
    case "a": $exibir6 = $percursoemkm / 9;
    echo " Seu veiculo é do tipo A e estima-se uma gasto de ". round($exibir6,2 );
    echo " litros de gasolina.";
        break;
    default : echo "Operação inválida! ";
}

echo "</FONT> ";
echo "<BR> <BR> FIM";

?>