<?php
session_start();

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    //Acesso o sistema
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r('Email: ' . $email);
    //print_r('<br>');
    //print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM alunos WHERE email = '$email' and senha = '$senha'";

    $result = $conexao ->query($sql);

    //print_r($sql);
    //print_r($result);

    if(mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['email']);
        header('Location: login.php');
    }
    else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
}
else {

    //Não acessa, volta para o login
    header('Location: login.php');
}



?>