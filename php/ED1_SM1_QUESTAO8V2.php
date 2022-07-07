<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="css/meucss.css" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">
        <h5>
            <P> 8-Faça um algoritmo em PHP no caderno ou no editor de texto (VSCode / Notepad ) que receba a velocidade de um veículo em Km/h (quilômetros por hora) e a transforme em m/s (metros por segundo).
            <P>
        </h5>
        <div class="form-group">
            <label for="vel">Velocidade de um Veículo em Km/h:  </label><br>
            <input name="vel" type="number" placeholder="100 km/h"><br>    

            <h6><input type="submit" class="btn btn-primary" value="Calcular Velocidade">
            </h6>
        </div>
    </form>

    <?php
         if( isset($_POST["vel"] )){
        
            $vel = $_POST ["vel"];
           
            $mt=3.6;

            $ms= $vel/$mt;
            $mk= $vel*$mt;

           echo "<div class=\"res\" >";
           echo "<br> A velocidade de km/h para m/s é de : ". round($ms,2)." M/S" ;
           echo "<br> A velocidade de m/s para km/h é de : ". round($mk,2)." KM/H" ;
           echo "</div>";
         }
    ?>

</body>

</html>