<?php
    session_start();
    include "../../model/conexao.php";
    if(empty($_SESSION['token_adm'])) {
        header("location: ../../index.php");
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitores Ativos</title>
    <style>
        tr,td,table{
            border: 1px solid #333;
            border-collapse: collapse;
        }
        tr{
            text-align: center;
        }

        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
    </style>
</head>
<body>
    <h1>Monitores Ativos</h1>
    <div class="box-search">
        <input type="search" name="" id="pesquisar" class="form-control w-25" placeholder="pesquisar">
        <button onclick="searchData()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>  
        </button>
    </div>

    <?php
        if(!empty($_GET['search'])){
            $data = $_GET['search'];
            $sql = "SELECT * FROM monitor WHERE email LIKE '%$data%' OR nome_completo LIKE '%$data%' OR senha_monitor LIKE '%$data%' ORDER BY email DESC";

        } else {
            $sql = "SELECT * FROM monitor ORDER BY email DESC";
        }
        $result = $conexao->query($sql);
    ?>

    <table style="width: 100%">
        <tr>
            <td>Email</td>
            <td>Nome</td>
            <td>Senha</td>
            <td>Biografia</td>
            <td>Ativos</td>
            <td>Editar</td>
            <td>Alterar</td>
        </tr>
        <?php
           while($linhas = mysqli_fetch_assoc($result)){
            echo("
                <tr>
                    <td>$linhas[email]</td> 
                    <td>$linhas[nome_completo]</td> 
                    <td>$linhas[senha_monitor]</td> 
                    <td>$linhas[bio]</td>
                    <td>$linhas[ativos]</td>
                    <td><a class='btn btn-primary' href='edit.php?email=$linhas[email]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                        </a>
                    </td>
                    <td>
                        <a class = 'btn btn-primary' href='atividade.php?email=$linhas[email]'>
                            alterar
                        </a>
                    </td>
                </tr>");
           }
        ?>
    </table>
    <br>
    <a href="paginaAdm.php">Voltar</a>
</body>
</html>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
        if(event.key === "Enter") {
            searchData();
        }
    });
    function searchData(){
        window.location = 'monitores.php?search=' + search.value;
    }
</script>
<?php
    }
?>