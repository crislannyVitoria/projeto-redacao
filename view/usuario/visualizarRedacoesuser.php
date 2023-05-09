<?php
session_start();
include "../../model/conexao.php";
if(empty($_SESSION['token_user'])) {
    header("location: ../../index.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="usuario.php">Voltar</a>
<h1> Mural de Redações </h1>
<?php
    $sql = "SELECT id_redacao, tema, autor, nota, redacao, comentarios FROM redacoes";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while($row = $resultado->fetch_assoc()) {
            $id = $row['id_redacao'];
            $tema = $row["tema"];
            $autor = $row["autor"];
            $nota = $row["nota"];
            $redacao = $row["redacao"];
            $comentarios = $row["comentarios"];

            echo "<p><strong>Tema: </strong> " . $tema . "</p>";
            echo "<p><strong>Autor: </strong> " . $autor . "</p>";
            echo "<p><strong>Nota: </strong> " . $nota . "</p>";
            echo "<fieldset><strong>Redação: </strong> " . "$redacao" . "</fieldset>";
            echo "<p><strong>Comentários: </strong> " . $comentarios . "</p>";
            echo "</br>";
            echo "<hr>";
        }
     } else {
        echo "Nenhum Resultado";
     }
?>
</body>
</html>
<?php
    }
?>



