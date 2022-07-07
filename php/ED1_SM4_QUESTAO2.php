<?php
//input
$municipio = "tabatinga";
$quantidade = 200000;
$votos = 5000;

//processamento

$segundoturnoounao = $votos / $quantidade;
$exibir  =  $segundoturnoounao * 100;

echo "<H1> SEMANA 4 </H1>";
echo "<FONT color=black>";
echo "<P> 2. Sabendo que somente os municípios que possuem mais de 200.000 eleitores têm segundo turno nas eleições para prefeito quando o 1º colocado não obtém mais do que 50% dos votos, crie um algoritmo que leia o nome do município, a quantidade de eleitores e o número de votos do candidato mais votados e informe se terá ou não segundo turno na eleição municipal. <p>";


if ($quantidade >= 200000) {
    echo "<br> Este municipio tem população maior que 200.000 mil habitantes, havendo segundo turno !!!";
    if ($segundoturnoounao >= 0.50 ) {
    echo "<br> <br> O candidato foi eleito com ".round($exibir,2 );
    echo "%  porcento dos votos não havendo segundo turno"; 
    } 
    else{
        echo "<br> <br> O candidato  irá disbutar o segundo turno pois atingiu apenas ".round($exibir,2 );
        echo "%  porcento dos votos havendo segundo turno.";
    }
}
else{
    echo "Este municipio tem população menor que 200.000 mil habitantes, não havendo segundo turno !!!";
    echo "<br> <br> O candidato foi eleito com ".round($exibir,2 );
    echo "%  porcento dos votos não havendo segundo turno pois o municipio tem menos que 200 mil habitantes."; 
}
echo "</FONT> ";
echo "<BR> <BR> FIM";
?>