<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="../controller/autentica.php" method="post">
        <h1>Página de login</h1>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required placeholder="Digite o seu email">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required placeholder="Digite a sua senha">
        <button type="submit">Entrar</button>
    </form>
    <a href="../index.php">Voltar</a>
</body>
</html>