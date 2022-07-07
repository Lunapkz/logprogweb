<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title> Questão 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <form action="" method="post">
        <div class="form-group">
            <label for="num1">Nota 1 </label><br>
            <input name="num1" type="number" value="0"><br>
            <label for="pes1">Peso 1 </label><br>
            <input name="pes1" type="number" value="0"><br>
            <label for="num2">Nota 2 </label><br>
            <input name="num2" type="number" value="0"><br>
            <label for="pes2">Peso 2 </label><br>
            <input name="pes2" type="number" value="0"><br>
          
            <input type="submit" class="btn btn-primary"   value="Calcular média">

        </div>

    </form>

        <?php

       

        if( isset($_POST["num1"], $_POST["num2"],$_POST["pes1"], $_POST["pes2"])){
       
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $pes1 = $_POST["pes1"];
        $pes2 = $_POST["pes2"];
     
 
        $media  = ($num1*$pes1+$num2*$pes2) / ($pes1+$pes2);
         echo "Média: " . round($media,2)  ;
        }
        
        ?>
</body>        


</html>