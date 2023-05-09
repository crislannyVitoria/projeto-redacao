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

            if($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $bio = $row['bio'];
                    $email1 = $row['email'];
                }
            } 
        }
?>
    <a href="paginaAdm.php">Voltar</a>
    <form action="../../controller/editbio.php" method="post">
        <h1>Atualizar Biografia</h1>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $email1?>" required><br><br>
        <label for="bio">Nova Biografia:</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10" required><?php echo $bio?></textarea>
        <button type="submit" name="update">Atualizar</button>
    </form>
<?php
    }
?>