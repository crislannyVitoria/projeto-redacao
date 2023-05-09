<?php
    session_start();
    include "../../model/conexao.php";
    if(empty($_SESSION['token_monitor'])) {
        header("location: ../../index.php");
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Monitor</title>
</head>
<body>
<nav>
        <a href="inserirRepertorio.php">Adicionar repertorio</a>
        <a href="visualizar.php">Visualizar Repertório</a>
        <a href="inserirVideos.php">Adicionar vídeos</a>
        <a href="visualizarVideos.php">Visualizar vídeos</a>
        <a href="inserirRedacoes.php">Adicionar Redações</a>
        <a href="visualizarRedacoes.php">Visualizar Redações</a>
    </nav>
    <h1>Home</h1>
    <p>Seja bem vindo</p>
    <a href="../../controller/exit.php">Deslogar</a>
</body>
</html>


<?php
    }
?>