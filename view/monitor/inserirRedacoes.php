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
  <link rel="stylesheet" href="../../assets/dist/ui/trumbowyg.min.css">
  <title>Document</title>
</head>
<body>
  <a href="paginaMonitor.php">Voltar</a>
  <h1> Inserir Redações</h1>
    <form action="../../controller/redacoes.php" method="POST">
    <label for="tema">Tema:</label>
    <input type="text" id="tema" name="tema" maxlength="110" required><br> <br>

    <label for="autor">Autor:</label>
    <input type="text" id="autor" name="autor" maxlength="50" required><br> <br>

    <label for="autor">Nota:</label>
    <input type="text" id="nota" name="nota" required><br> <br>

    <label for="trumbowyg-demo">Redação:</label> <br>
    <textarea id="trumbowyg-demo" class= "trumbowyg-demo" name="redacao" rows="30" cols="80" required></textarea><br> <br>

    <label for="comentarios">Comentários:</label> <br>
    <textarea id="comentarios" class= "trumbowyg-demo" name="comentarios" rows="10" cols="20" maxlength="500" required></textarea><br>

    <input type="submit" value="Adicionar" name="Adicionar">
  </form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="../../assets/dist/trumbowyg.min.js"></script>
<script type="text/javascript" src="../../assets/dist/langs/pt_br.min.js"></script>

<script>
    $('.trumbowyg-demo').trumbowyg({
      lang: 'pt_br',
      btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        ['formatting'],
        ['strong', 'em', 'del'],
        ['superscript', 'subscript'],
        ['link'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']   
    ],  
      autogrow: true
    });

</script>
</body>
</html>
<?php
}
?>