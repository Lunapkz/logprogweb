<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="css/meucss.css" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">
        <h5>
            <P> 6-Faça um algoritmo PHP no caderno ou no editor de texto (VSCode / Notepad ) que receba os valores antigo e novo de um produto, e calcule a porcentagem de aumento que o mesmo teve.
            <P>
        </h5>
        <div class="form-group">
            <label for="ant">Antigo Valor: </label><br>
            <input name="ant" type="number" placeholder="R$1000,00"><br>
            <label for="nov">Novo Valor: </label><br>
            <input name="nov" type="number" placeholder="0"><br>
            
            <h6><input type="submit" class="btn btn-primary" value="Calcular Novo Valor">
            </h6>
        </div>
    </form>
    <?php
    if (isset($_POST["ant"], $_POST["nov"])) {

        $ant = $_POST["ant"];
        $nov = $_POST["nov"];
      


        $novovalor= (($nov-$ant)/$ant)*100;
        echo "<div class=\"res\" >";
        echo "Houve um aumento de : ".$novovalor ."%";
        echo "</div>";
    }

    ?>
</body>

</html>