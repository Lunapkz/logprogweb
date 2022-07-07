<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title> Questão 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <form action="" method="POST">
        <div class="form-group">
            <label for="bas">Salário Base </label><br>
            <input name="bas" type="number" value="0"><br>
            <label for="dep">Depnedentes </label><br>
            <input name="dep" type="number" value="0"><br>
            <label for="fam">Salário Família </label><br>
            <input name="fam" type="number" value="32.00"><br>
            <label for="imp">imp </label><br>
            <input name="imp" type="number" value="27.5"><br>
          
            <input type="submit" class="btn btn-primary"   value="Somar">
             
        </div>

    </form>

    <?php

    if( isset($_POST["bas"], $_POST["dep"],$_POST["fam"], $_POST["imp"])){

            $bas = $_POST ["bas"];
            $dep = $_POST ["dep"];
            $fam = $_POST ["fam"];
            $imp = $_POST ["imp"];

       
            $basa = $bas + ($dep * $fam);
            $salarioliq = $basa - (($basa * $imp)/100);
    
    echo "Salário líquido: " .  round ($salarioliq,1) . "<br>";
    }
        
        ?>
</body>


</html>