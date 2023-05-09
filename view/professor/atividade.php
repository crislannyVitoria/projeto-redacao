<?php
session_start();
include "../../model/conexao.php";
if(empty($_SESSION['token_adm'])) {
    header("location: ../../index.php");
} else {
    if(!empty($_GET['email'])){
        $email = $_GET['email'];
        $mostre = "SELECT * FROM monitor WHERE email = '$email' ";
        $result = $conexao->query($mostre);
        $row = $result->fetch_assoc();
        $ativo = $row['ativos'];

        if($result->num_rows > 0){
            if($ativo == "ativo"){
                $alterar = "UPDATE monitor SET ativos = 'inativo' WHERE email = '$email' ";
            } else{
                $alterar = "UPDATE monitor SET ativos = 'ativo' WHERE email = '$email' ";
            }
            $resultado = $conexao->query($alterar);
        }
    }
    header("location: monitores.php");
}
?>