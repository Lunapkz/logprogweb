<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastra de Clientes</title>
</head>

<body>
    <?php
        $idCliente = $_GET["textNome"];
        $cpf  = $_GET["textCPF"];
        $endereco = $_GET["textEndereco"];
        $endereco = $_GET["textEndereco"];

        //Adicionar concexão com o BD

        include_once("conexaobd.php");

        $sql = "INSERT INTO ESTADOS(SIGLA,NOME) VALUES ('$sigla','$nome');";
        mysqli_query($conection,$sql) ;
        echo 'Cadastrado com sucesso';
    ?>

</body>

</html>