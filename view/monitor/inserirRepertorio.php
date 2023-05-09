<?php
session_start();
include "../../model/conexao.php";
if(empty($_SESSION['token_monitor'])) {
    header("location: ../../index.php");
} else {
    $tematica = "SELECT * FROM tematica";
    $mostrar = $conexao->query($tematica);

    $tipos = "SELECT * FROM tipo_repertorio";
    $mostrar1 = $conexao->query($tipos);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Repertórios</title>
</head>
<body>
    <h1>Inserir Novo Tema</h1>
    <form action="" method="POST">
        <label for="tema">Temática</label>
        <input type="text" name='tema' id='tema' required placeholder="Adicionar eixo temático">
        <button type="submit" name="ok">Adicionar</button>
    </form>

    <h2>Inserir tipos de Repertórios</h2>
    <form action="" method="POST">
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo" required placeholder="Adicionar novo tipo">
        <button type="submit" name="execute">Inserir</button>
    </form>
    <?php
        if(isset($_POST['ok'])){
            $tema = $_POST['tema'];
            $compare = "SELECT * FROM tematica WHERE nome = '$tema' ";
            $resultado_compare = $conexao->query($compare);
            if($resultado_compare->num_rows == 0) {
                $sql_criar = "INSERT INTO tematica VALUES(NULL,'$tema')";
                $resultado_criar = $conexao->query($sql_criar);
                echo "Tema inserido com sucesso";
            } else {
                echo "Tema Já existente";
            }
        }

        if(isset($_POST['execute'])){
            $tipo = $_POST['tipo'];
            $comparar = "SELECT * FROM tipo_repertorio WHERE nome = '$tipo' ";
            $resultado_comparar = $conexao->query($comparar);
            if($resultado_comparar->num_rows == 0) {
                $sql_add = "INSERT INTO tipo_repertorio VALUES(NULL,'$tipo')";
                $add = $conexao->query($sql_add);
                echo "Tipo de repertório adicionado" . mysqli_error($conexao);
            } else {
                echo "Este tipo de repertório já existe";
            }
        }
    ?>
    <h1>Inserir novo repertório</h1>
    <form action="" method="post">
        <label for="nome">Nome do Autor</label>
        <input type="text" name="nome" id="nome" required placeholder="Insira o nome do autor">
        <label for="citacao">Citação</label>
        <textarea name="citacao" id="citacao" cols="30" rows="10" required></textarea>
        <label for="tema">Temas:</label>
        <select name="tema" id="tema">
            <?php while ($row = mysqli_fetch_assoc($mostrar)) : ?>
                <option value="<?php echo $row['id_tematica']?>"><?php echo $row['nome']?></option>
            <?php endwhile ; ?>
        </select>
        <label for="tipo">Tipo de Repertorio</label>
        <select name="tipo" id="tipo">
            <?php while($row1 = mysqli_fetch_assoc($mostrar1)) : ?>
                <option value="<?php echo $row1['id_tipo_repertorio']?>"><?php echo $row1['nome']?></option> 
            <?php endwhile ; ?>
        </select>
        <button type="submit" name="click" value="adicionar">Adicionar</button>
        <br>
    </form>
    <a href="paginaMonitor.php">Voltar</a>
    <?php
       if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['click'])) {
            $tema = $_POST['tema'];
            $nome = $_POST['nome'];
            $citacao = $_POST['citacao']; 
            $tipo = $_POST['tipo'];
            $data = time();

            $sql = "SELECT * FROM repertorio WHERE citacao = '$citacao' ";
            $resultado=  $conexao->query($sql);

            if($resultado->num_rows == 0) {
                $inserir = "INSERT INTO repertorio VALUES(NULL,'$data','$nome','$citacao','$tipo','$tema', '$_SESSION[monitor]' )";
                $resultado_inserir = $conexao->query($inserir);
                echo "Repertório adicionado com sucesso" .mysqli_error($conexao);
            } else {
                echo "Repertório já existente ou erro ao inserir dados: " .mysqli_error($conexao);
            }
            
       }
    ?>
<?php
}
?>
