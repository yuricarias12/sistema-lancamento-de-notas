<?php

include_once('config.php');

if(isset($_POST['update'])) {

    $id = $_POST['id'];
    $AV1 = $_POST['AV1'];
    $AV2 = $_POST['AV2'];
    $media_final = $_POST['media_final'];
    $situacao = $_POST['situacao'];

    $sqlUpdate = "UPDATE alunos SET AV1='$AV1', AV2='$AV2', media_final ='$media_final', situacao = '$situacao' WHERE id_aluno = '$id' ";

    $result = $conexao -> query($sqlUpdate);
}

header('Location: sistema.php');

?>