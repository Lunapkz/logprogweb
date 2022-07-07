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
            <P> 1-Crie um algoritmo que leia um número e alerte quando o mesmo for maior do que 100.
            <P>
        </h5>
        <div class="form-group">
            <label for="number">Digite um número:</label><br>
            <input name="num" type="number" placeholder="0000"><br>

            <h6><input type="submit" class="btn btn-primary" value="Avaliar o número ">
            </h6>
        </div>
    </form>
    <?php
    if (isset($_POST["num"])) {
        $num = $_POST["num"];

        if ($num >= 100) {
            echo "<div \"res\">";
            echo "<BR> O valor é maior ou igual a 100.";
            echo "</div>";
        } else {
            echo "<div class=\"res\">";
            echo "<BR>  O valor é menor a 100.";
            echo "</div>";
        }
    }
    ?>
</body>

</html>