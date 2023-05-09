<?php
include "../model/conexao.php";

$tema = $_POST['tema'];
$autor = $_POST['autor'];
$nota = $_POST['nota'];
$redacao = $_POST['redacao'];
$comentarios = $_POST['comentarios'];
if(!empty($_POST['Adicionar'])) {
    $sql = "SELECT * FROM redacoes WHERE redacao = '$redacao' ";
    $result = $conexao->query($sql);
 
    if($result->num_rows == 0){
        $sql_insert = "INSERT INTO redacoes VALUES( null,'$tema','$autor','$nota','$redacao','$comentarios')";
        $cadastrar = $conexao->query($sql_insert);
        echo "<script>window.alert('Redação adicionada com sucesso');</script> <script>location.href='javascript:history.back(1)'</script>";
    }else {
        echo "<script>window.alert('Erro: Redação já existente!');</script> <script>location.href='javascript:history.back(1)'</script>";
    }
} 