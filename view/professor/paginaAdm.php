<?php
    session_start();
    include "../../model/conexao.php";
    if(empty($_SESSION['token_adm'])) {
        header("location: ../../index.php");
    } else {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Professor</title>
</head>
<body>
<nav class="navbar">
        <a href="novoMonitor.php">Cadastrar novos monitores</a>
        <a href="monitores.php">Visualizar Monitores</a>
    </nav>
    <h1>Home</h1>
    <p>Seja bem vindo a esta página</p>
   
    <a href="../../controller/exit.php">Deslogar</a>
</body>
</html>
<?php     
    }
?>