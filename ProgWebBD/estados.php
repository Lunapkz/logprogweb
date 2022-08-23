<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastra de Estados (UF)</title>
</head>

<body>
    <?php
        $sigla = $_GET["sigla"];
        $nome  = $_GET["nome"];
     
        //Adicionar concexão com o BD

        include_once("conexaobd.php");

        $sql = "INSERT INTO ESTADOS(SIGLA,NOME) VALUES ('$sigla','$nome');";
        mysqli_query($connection,$sql) or die ("Erro ao Cadastrar". mysql_error());
        echo 'Cadastrado com sucesso';
    ?>

</body>

</html>