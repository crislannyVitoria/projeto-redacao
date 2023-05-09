<?php
    session_start();
    include "../../model/conexao.php";
    if(empty($_SESSION['token_adm'])) {
        header("location: ../../index.php");
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novos Monitores</title>
</head>
<body>
    <h1>Cadastro de Novos Monitores</h1>
    <form action="../../controller/insertMonitor.php" method="post">
        <label for="nome">Nome Completo</label>
        <input type="text" name="nome" id="nome" required placeholder="Digite o nome">
        <label for="bio">Biografia</label>
        <textarea name="bio" id="bio" cols="30" rows="10" required placeholder="Digite a biografia"></textarea>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" required placeholder="Digite o email">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required placeholder="Digite a senha">
        <button type="submit" name="ok" >Cadastrar</button>
    </form>
    <a href="paginaAdm.php">Voltar</a>
</body>
</html>

<?php
    }
?>