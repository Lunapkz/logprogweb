<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title> Questão 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <form action="" method="POST">
        <div class="form-group">
            <label for="raio">Raio </label><br>
            <input name="raio" type="number" value="0"><br>
                     
            <input type="submit" class="btn btn-primary"   value="Somar">
             
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
      
      echo "Diâmetro: " . round($diametro,2) . "<br>";
      echo "Perimetro: " . round($perimetro,1) . "<br>";
      echo "Área: " . round($area,0) . "<br>";
      echo "Volume: " .  round($volume,2) . "<br>";

    }
    ?>
 

</body>

</html>