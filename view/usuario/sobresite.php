<?php
session_start();
include "../../model/conexao.php";  
if(empty($_SESSION['token_user'])) {
    header("location: ../../index.php");
} else {
?>
<?php
$sql = "SELECT nome_completo, bio FROM monitor";

$resultado = $conexao->query($sql);
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
    <h1>Projeto Redatrix</h1>
    <!--Sujestão colocar uma foto dos envolvidos no projeto-->
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quia et quos maxime saepe quam beatae vero deleniti ut iste! Veniam, magni? Asperiores obcaecati iusto reprehenderit ipsam sapiente maiores quaerat.</p>
    <h2>Projeto Monitoria(Participantes)</h2>

<style>
        tr,td,th, table{
            border: 1px solid #333;
            border-collapse: collapse;
            text-align: center;
        }
        tr, td{
            text-align: center;
            padding: 13px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            width: 400px;
        }
    </style>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Biografia</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Loop através dos resultados e exibe os nomes e as biografias dos monitores ativos
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nome_completo"] . "</td>";
                echo "<td>" . $row["bio"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Não há monitores ativos.</td></tr>";
        }
        ?>
    </tbody>
</table>
<footer>
    Redatrix Todos os direitos reservados &copy
</footer>
</body>
</html>
<?php
}
?>
