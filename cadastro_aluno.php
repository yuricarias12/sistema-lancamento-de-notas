<?php
if (isset($_POST['submit'])) 
{
    /*print_r($_POST['nome']);
    print_r('<br>');
    print_r($_POST['matricula']);
    print_r('<br>');
    print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['telefone']);
    print_r('<br>');
    print_r($_POST['data_nascimento']);
    print_r('<br>');
    print_r($_POST['endereco']);
    print_r('<br>');
    print_r($_POST['cidade']);
    print_r('<br>');
    print_r($_POST['uf']);*/
}
include_once('config.php');

if(isset($_POST['nome']) || isset($_POST['curso']) || isset($_POST['matricula']) || isset($_POST['email']) || isset($_POST['telefone']) || isset($_POST['data_nascimento']) || isset($_POST['endereco']) || isset($_POST['cidade']) || isset($_POST['uf'])){
    
$nome = $_POST['nome'];
$curso = $_POST['curso'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

$result = mysqli_query($conexao, "INSERT INTO alunos(nome, curso, matricula, email, telefone, data_nascimento, endereco, cidade, uf) 
    VALUES ('$nome', '$curso', '$matricula', '$email', '$telefone', '$data_nascimento', '$endereco', '$cidade', '$uf')");
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
    <title>Cadastro Aluno</title>
</head>

<body>
    <main>
    <a class="btn btn-danger" href="sistema.php">Voltar</a>
        <section class="container">
            <header>Cadastrar Aluno</header>
            <form action="cadastro_aluno.php" method="POST" class="form">
                <div class="input-box">
                    <label>Nome Completo</label>
                    <input type="text" name="nome" placeholder="Informe nome completo" required />
                </div>
                <div class="input-box">
                        <label>Curso</label>
                        <select name="curso" class="select-box" required>
                            <option value="" disabled selected >Selecione um curso...</option>
                            <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                            <option value="Direito">Direito</option>
                            <option value="Psicologia">Psicologia</option>
                            <option value="Enfermagem">Enfermagem</option>
                            <option value="Administração">Administração</option>
                            <option value="Gestão da Qualidade">Gestão da Qualidade</option>
                            <option value="Gestão de Recursos Humanos">Gestão de Recursos Humanos</option>
                            <option value="Processos Gerenciais">Processos Gerenciais</option>
                        </select>
                    </div>
                <div class="input-box">
                    <label>Matricula</label>
                    <input type="text" name="matricula" placeholder="Informe matricula do aluno" required />
                </div>
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Insira email" required />
                </div>
                <div class="column">
                    <div class="input-box">
                        <label>Telefone</label>
                        <input type="number" name="telefone" placeholder="Informe número para contato" required />
                    </div>
                    <div class="input-box">
                        <label>Data Nascimento</label>
                        <input type="date" name="data_nascimento" placeholder="Insira data de Nascimento" required />
                    </div>
                </div>

                <div class="input-box endereco">
                    <label>Endereço</label>
                    <input type="text" name="endereco" placeholder="Nome da rua" required />
                    <input type="text" name="cidade" placeholder="Cidade" required />
                    <div class="column">
                        <div class="select-box">
                            <select name="uf" required>
                                <option value="" disabled selected>Selecione um estado...</option>
                                <option value="PE">PE</option>
                                <option value="SP">SP</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                            </select>
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