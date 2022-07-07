<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="css/meucss.css" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">
        <h5>
            <P> 7-Faça um algoritmo em PHP que receba o tamanho do raio de um círculo e faça o cálculo do diâmetro, do perímetro e da área do círculo. Calcule também o volume se esse círculo fosse a base para se criar uma esfera.
            <P>
        </h5>
        <div class="form-group">
            <label for="raio">Raio: </label><br>
            <input name="raio" type="number" placeholder="0"><br>

            <h6><input type="submit" class="btn btn-primary" value="Calcular">
            </h6>
        </div>
    </form>

    <?php
         if( isset($_POST["raio"] )){
        
            $raio = $_POST ["raio"];
            $pi = 3.1415;
    
            $diametro = $raio * 2; 
            $perimetro = 2 * $pi * $raio; 
            $area = ($pi*2) * ($raio * $raio); 
           $volume =( 4 * $pi * $raio * $raio * $raio) / 3;

           echo "<div class=\"res\" >";
           echo "Diâmetro: " . round($diametro,2) . "<br>";
           echo "Perimetro: " . round($perimetro,1) . "<br>";
           echo "Área: " . round($area,0) . "<br>";
           echo "Volume: " .  round($volume,2) . "<br>";
           echo "</div>";
         }
    ?>

</body>

</html>