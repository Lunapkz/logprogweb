<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="css/meucss.css" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">
        <h5>
            <P> 5-Faça um algoritmo PHP no caderno ou no editor de texto (VSCode / Notepad ) que receba o salário-base e a quantidade de dependentes, e calcule o salário.
            <P>
        </h5>
        <div class="form-group">
            <label for="bas">Salário Base: </label><br>
            <input name="bas" type="number" placeholder="R$1000,00"><br>
            <label for="dep">Dependentes: </label><br>
            <input name="dep" type="number" placeholder="0"><br>
            <label for="fam">Salário Família: </label><br>
            <input name="fam" type="number" value="32.00"><br>
            <label for="imp">Imposto: </label><br>
            <input name="imp" type="number" value="27.5"><br>

            <h6><input type="submit" class="btn btn-primary" value="Calcular salário">
            </h6>
        </div>
    </form>
    <?php
    if (isset($_POST["bas"], $_POST["dep"], $_POST["fam"], $_POST["imp"])) {

        $bas = $_POST["bas"];
        $dep = $_POST["dep"];
        $fam = $_POST["fam"];
        $imp = $_POST["imp"];


        $basa = $bas + ($dep * $fam);
        $salarioliq = $basa - (($basa * $imp) / 100);
        echo "<div class=\"res\" >";
        echo "Salário líquido: " . round($salarioliq, 1) . "<br>";
        echo "</div>";
    }

    ?>
</body>

</html>