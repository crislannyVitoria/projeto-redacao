<?php
session_start();
include "../../model/conexao.php";
if(empty($_SESSION['token_monitor'])) {
    header("location: ../../index.php");
} else {
?>
<form action="../../controller/videos.php" method="post">
    <h1>Inserção de Vídeos</h1>
    <label for="nome">Nome do vídeo</label>
    <input type="text" name="nome" id="nome" required>
    <label for="link">Link</label>
    <input type="text" name="link" id="link" required>
    <label for="desc">Descrição</label>
    <textarea name="desc" id="desc" cols="30" rows="6"></textarea>
    <button type="submit" name="ok">
        Cadastrar
    </button>
    <a href="paginaMonitor.php">Voltar</a>
</form>
<?php
}
?>