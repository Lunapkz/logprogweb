<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/meucss.css" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">
        <h5>
            <P> 4-Faça um algoritmo PHP no caderno ou no editor de texto (VSCode / Notepad ) que receba o salário inicial, a porcentagem de aumento e calcule o novo salário.
            <P>
        </h5>
        <div class="form-group">
            <label for="sal">Sálario Inicial: </label><br>
            <input name="sal" type="number" placeholder="R$ 0000,00"><br>
            <label for="por">Porcentagem de Aumento: </label><br>
            <input name="por" type="number" placeholder=" 10,00%"><br>

            <h6><input type="submit" class="btn btn-primary" value="O novo Salário"></h6>
        </div>
    </form>
    <?php
    if (isset($_POST["sal"], $_POST["por"])) {
        $sal = $_POST["sal"];
        $por = $_POST["por"];


        $salnovo= $sal+($sal*$por)/100;

        echo "<div class=\"res\" >";
        echo "O Salário novo é: " . $salnovo;
        echo "</div>";
    }
    ?>

</body>

</html>