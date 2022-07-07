<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/meucss.css" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">
        <h5>
            <P> 3-Faça um algoritmo PHP no caderno ou no editor de texto (VSCode / Notepad ) que receba duas notas de prova, seus respectivos pesos e calcule a média ponderada deles.
            <P>
        </h5>
        <div class="form-group">
            <label for="num1">Nota 1: </label><br>
            <input name="num1" type="number" placeholder="0"><br>
            <label for="pes1">Peso 1: </label><br>
            <input name="pes1" type="number" placeholder="0"><br>
            <label for="num2">Nota 2: </label><br>
            <input name="num2" type="number" placeholder="0"><br>
            <label for="pes2">Peso 2: </label><br>
            <input name="pes2" type="number" placeholder="0"><br>

            <h6><input type="submit" class="btn btn-primary" value="Média Ponderada"></h6>

        </div>
    </form>
    <?php
    if (isset($_POST["num1"], $_POST["num2"], $_POST["pes1"], $_POST["pes2"])) {

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $pes1 = $_POST["pes1"];
        $pes2 = $_POST["pes2"];


        $media  = ($num1 * $pes1 + $num2 * $pes2) / ($pes1 + $pes2);
        echo "<div class=\"res\">";
        echo "Média: " . round($media, 2);
        echo "</div>";
    }

    ?>

</body>

</html>