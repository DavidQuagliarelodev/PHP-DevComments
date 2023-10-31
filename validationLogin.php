<?php 
if(isset($_POST['submmit']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include("./db/configLogin.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM `devlogin` WHERE nome = '$nome' and email = '$email' and senha = '$senha';
    ";
    $result = $connection -> query($sql);

    if(mysqli_num_rows($result) < 1){
        header('location: register.php');
    }else{
        header('location: coments.php');
    }

}else{
    header('location: login.php');
    
}

?>