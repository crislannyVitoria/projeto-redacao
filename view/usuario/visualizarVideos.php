<?php
session_start();
include "../../model/conexao.php";
if(empty($_SESSION['token_user'])) {
    header("location: ../../index.php");
} else {
    if(isset($_GET['pesquisar'])){
        $buscar = $_GET['pesquisar'];
        $_SESSION['buscar'] = $buscar;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <title>Vídeos</title>
</head>
<body>
    <a href='usuario.php'>Voltar</a>
    <h1>Listar Vídeos</h1>
    <form action="" method="get">
        <input type='search' name='pesquisar' id='pesquisar'>
        <button>
            Buscar
        </button>
    </form>
        <div class="videos">
            <span class="listar-videos"></span>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="../../assets/custom1.js"></script>
</body>
</html>

<?php
    } else if(empty($_GET['pesquisar'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <title>Vídeos</title>
</head>
<body>
    <a href='usuario.php'>Voltar</a>
    <h1>Listar Vídeos</h1>
    <form action="" method="get">
        <input type='search' name='pesquisar' id='pesquisar'>
        <button>
            Buscar
        </button>
    </form>
        <div class="videos">
            <span class="listar-videos"></span>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="../../assets/custom1.js"></script>
</body>
</html>
<?php
    }  else {
        echo "Erro: nenhum usuário encontrado";
    }
}
?>

