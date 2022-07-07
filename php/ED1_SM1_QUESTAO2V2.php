<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title> Questão 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/meucss.css" rel="stylesheet">

</head>

<body>
    <form action="" method="POST">
        <h5>
            <P> 2-Faça um algoritmo PHP no caderno ou no editor de texto (VSCode / Notepad) que receba quatro números
                reais e calcule a média deles.
            <P>
        </h5>
        <div class="form-group">
            <label for="num1">Número 1: </label><br>
            <input type="number" name="num1" placeholder="0"><br>
            <label for="num2">Número 2: </label><br>
            <input type="number" name="num2" placeholder="0"><br>
            <label for="num3">Número 3: </label><br>
            <input type="number" name="num3" placeholder="0"><br>
            <label for="num1">Número 4: </label><br>
            <input type="number" name="num4" placeholder="0"><br>

            <h6><input type="submit" class="btn btn-primary" value="Média"></h6>

        </div>
    </form>
    <?php
    if(isset($_POST["num1"],$_POST["num2"],$_POST["num3"],$_POST["num4"])){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        $num3=$_POST["num3"];
        $num4=$_POST["num4"];

        $media = ($num1 + $num2 + $num3 + $num4 )/4;

        echo "<div class=\"res\" >";
        echo "Média: ". $media;
        echo "</div>";    
    }
    ?>
</body>

</html>