<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Login</title>
</head>

<body>
    <main>
        <section class="container">
            <header>Login</header>
            <form action="testeLogin.php" method="POST" class="form">
                <div class="input-box">
                    <label>Login</label>
                    <input type="text" name="email" placeholder="Email" />
                </div>
                <div class="input-box">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Senha" />
                </div>
                <button type="submit" name="submit" value="Enviar" class="btn-cadastro">Entrar</button>
            </form>
        </section>
    </main>

</body>

<footer>

</footer>

</html>