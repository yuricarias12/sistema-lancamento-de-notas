<?php
if (!empty($_GET['id'])) {
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM alunos WHERE id_aluno = $id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {

        while ($user_data = mysqli_fetch_assoc($result)) {

            $AV1 = $_GET['AV1'];
            $AV2 = $_GET['AV2'];
            $media_final = ($AV1 + $AV2) / 2;

            if ($media_final >= 7) {
                $situacao = "APROVADO";
            } else {
                $situacao = "REPROVADO";
            }
        }
    } else {
        header('Location: sistema.php');
    }
} else {
    header('Location: sistema.php');
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
    <title>Lançamento de notas</title>
</head>

<body>
    <main>
        <a class="btn btn-danger" onclick="rB()">Voltar</a>
        <section class="container">
            <header>Notas</header>
            <form action="saveEdit.php" method="POST" class="form">
                <div class="input-box">
                    <label>AV1</label>
                    <input type="text" name="AV1" value="<?php echo $AV1 ?>" placeholder="Primeira nota" readonly required />
                </div>
                <div class="input-box">
                    <label>AV2</label>
                    <input type="text" name="AV2" value="<?php echo $AV2 ?>" placeholder="Segunda nota" readonly required />
                </div>
                <div class="input-box">
                    <label>Média</label>
                    <input type="text" name="media_final" value="<?php echo $media_final ?>" placeholder="Média Final" readonly required />
                </div>
                <div class="input-box">
                    <label>Situação</label>
                    <input type="text" name="situacao" value="<?php echo $situacao ?>" placeholder="Situação" readonly required />
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button type="submit" name="update" id="update" class="link-botao">Inserir</button>
            </form>
        </section>
    </main>
    <script>
        var btnV;

        function rB() {
            window.history.back();
        }

        function voltar() {
            btnV = document.getElementById("btnVoltar")

            btnV.addEventListener("click", rB)
        }
    </script>

</body>

<footer>

</footer>

</html>