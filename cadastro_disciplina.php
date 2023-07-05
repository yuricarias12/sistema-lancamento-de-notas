<?php
if (isset($_POST['submit'])) {
    ////print_r($_POST['nome_disciplia']);
    ////print_r('<br>');
    //print_r($_POST['codigo_disciplina']);
    //print_r('<br>');
    //print_r($_POST['turma']);
    //print_r('<br>');
    //print_r($_POST['filial']);
    //print_r('<br>');
    //print_r($_POST['periodo']);
    //print_r('<br>');
    //print_r($_POST['periodo_letivo']);
    
}
include_once('config.php');

if (isset($_POST['nome_disciplia']) || isset($_POST['codigo_disciplina']) || isset($_POST['turma']) || isset($_POST['filial']) || isset($_POST['periodo']) || isset($_POST['periodo_letivo'])) {

    $nome_disciplia = $_POST['nome_disciplia'];
    $codigo_disciplina = $_POST['codigo_disciplina'];
    $turma = $_POST['turma'];
    $filial = $_POST['filial'];
    $periodo = $_POST['periodo'];
    $periodo_letivo = $_POST['periodo_letivo'];


    $result = mysqli_query($conexao, "INSERT INTO disciplinas(nome_disciplina, codigo_disciplina, turma, filial, periodo, periodo_letivo) 
    VALUES ('$nome_disciplia', '$codigo_disciplina', '$turma', '$filial', '$periodo', '$periodo_letivo')");
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="/js/scripts.js" defer></script>
    <title>Cadastro Disciplina</title>
</head>

<body>
    <main>
    <a class="btn btn-danger" href="sistema.php">Voltar</a>
        <section class="container">
            <header>Cadastrar Disciplina</header>
            <form action="cadastro_disciplina.php" method="POST" id="form" class="form">
                <div class="input-box">
                    <label>Nome da Disciplina</label>
                    <input name="nome_disciplia" type="text" placeholder="Insira nome da disciplina" required />
                </div>
                <div class="input-box">
                    <label>Código da disciplina</label>
                    <input name="codigo_disciplina" type="text" placeholder="Insira código da disciplina" required />
                </div>
                <div class="input-box">
                    <label>Turma</label>
                    <input name="turma" type="text" placeholder="Insira nome da turma" required />
                </div>
                <div class="input-box">
                    <label>Filial</label>
                    <input name="filial" type="text" placeholder="Insira o nome da filial" required />
                </div>
                <div class="column">
                    <div class="input-box">
                        <label>Período</label>
                        <select name="periodo" class="select-box" required>
                            <option value="" disabled selected>Selecione um Período...</option>
                            <option value="1">1° Período</option>
                            <option value="2">2° Período</option>
                            <option value="3">3° Período</option>
                            <option value="4">4° Período</option>
                            <option value="5">5° Período</option>
                            <option value="6">6° Período</option>
                            <option value="7">7° Período</option>
                            <option value="8">8° Período</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label>Período Letivo</label>
                        <input name="periodo_letivo" type="date" placeholder="Insira o periodo letivo" required />
                    </div>
                </div>
                <button type="submit" name="submit" class="link-botao">Cadastrar</button>
            </form>
        </section>
    </main>

</body>

<footer>

</footer>

</html>