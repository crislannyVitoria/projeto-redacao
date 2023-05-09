<?php
    session_start();
    include "../../model/conexao.php";
    if(empty($_SESSION['token_user'])) {
        header("location: ../../index.php");
    } else {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do usuário</title>
</head>
<body>
    <nav>
        <a href="../../controller/exit.php">Deslogar</a>
        <a href="visualizarRepertorios.php">Repertórios</a>
        <a href="visualizarVideos.php">Videoaulas</a>
        <a href="visualizarRedacoesuser.php">Redações</a>
        <a href="sobresite.php">Sobre</a>
    </nav>
    <h1>Home</h1>
    <p>Bem vindo a esta página</p>
</body>
</html>
<?php
    }
?>