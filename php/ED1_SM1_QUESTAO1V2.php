<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/meucss.css" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">
       
            <h5>
                <P> 1- Faça um algoritmo em PHP no caderno ou no editor de texto (VSCode / Notepad ) que receba três números inteiros e calcule a soma deles.<P>

            </h5>
             <div class="form-group">
            <label for="num1">Primeiro valor:</label><br>
            <input type="number" name="num1" placeholder="0"><br>
            <label for="num2">Segundo valor:</label><br>
            <input type="number" name="num2" placeholder="0"><br>
            <label for="num3">Terceiro valor:</label><br>
            <input type="number" name="num3" placeholder="0"><br>

            <h6><input type="submit" class="btn btn-primary" value="Somar"><h6>
        </div>
    </form>
    <?php
    if (isset($_POST["num1"], $_POST["num2"], $_POST["num3"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    $soma = $num1 + $num2 + $num3;
    echo "<div class=\"res\">";
    echo "Soma: " . $soma;
    echo "</div>";
    }
    ?>
</body>

</html>