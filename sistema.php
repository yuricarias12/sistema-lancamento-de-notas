<?php
session_start();
include_once('config.php');
//print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$logado = $_SESSION['email'];

if (!empty($_GET['search'])) {

    $data = $_GET['search'];
    $sql = "SELECT * FROM alunos WHERE id_aluno LIKE '%$data%' or nome LIKE '%$data%' or curso LIKE '%$data%' or matricula LIKE '%$data%' or email LIKE '%$data%' ORDER BY id_aluno DESC";
} else {

    $sql = "SELECT * FROM alunos ORDER BY id_aluno DESC";
}

$result = $conexao->query($sql);

//print_r($result);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style_sistema.css" />
    <title>Home</title>
</head>

<body>
    <?php
    echo "<h1> Bem vindo </h1><br><h1>$logado</h1>"
    ?>
    <br>
    <div class="d-flex justify-content-center">
        <input type="search" class="form-control w-25" placeholder="Pesquisar..." id="pesquisar">
        <button onclick="searchData()" class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </button>
    </div>
    <div class="btn-group position-absolute top-0 end-0 ">
        <a class="btn btn-primary " href="cadastro_aluno.php"> Cadastrar novo aluno </a>
        <a class="btn btn-secondary" href="cadastro_disciplina.php"> Cadastrar nova disciplina </a>
        <a class="btn btn-danger" href="login.php"> Sair </a>
    </div>

    <div class="m-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data_Nascimento</th>
                    <th scope="col">AV1</th>
                    <th scope="col">AV2</th>
                    <th scope="col">MÉDIA_Final</th>
                    <th scope="col">Situação</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id_aluno'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['curso'] . "</td>";
                    echo "<td>" . $user_data['matricula'] . "</td>";
                    echo "<td>" . $user_data['email'] . "</td>";
                    echo "<td>" . $user_data['telefone'] . "</td>";
                    echo "<td>" . $user_data['data_nascimento'] . "</td>";
                    echo "<td>" . $user_data['AV1'] . "</td>";
                    echo "<td>" . $user_data['AV2'] . "</td>";
                    echo "<td>" . $user_data['media_final'] . "</td>";
                    echo "<td>" . $user_data['situacao'] . "</td>";
                    echo "<td>
                            <a class='btn btn-sm  btn-primary' href='notas.php?id=$user_data[id_aluno]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-circle' viewBox='0 0 16 16'>
                                <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                                <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
                            </svg>
                            </a>
                            
                            <a class='btn btn-sm  btn-danger' href='delete.php?id=$user_data[id_aluno]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                        </td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = 'sistema.php?search=' + search.value;
    }
</script>

</html>