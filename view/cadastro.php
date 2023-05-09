<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Página de Cadastro</h1>
    <form action="../controller/insert.php" method="post">
        <label for="nome">Nome de Usuário</label>
        <input type="text" name="nome" id="nome" required placeholder="Digite o seu nome">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required placeholder="Digite o seu email">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required placeholder="Digite a sua senha">
        <button type="submit" name="ok">Cadastrar</button>
    </form>
    <a href="../index.php">Voltar</a>
</body>
</html>