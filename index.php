<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Site</h1>
        <nav>
            <ul>
                <li><a href="">Item 1</a></li>
                <li><a href="">Item 2</a></li>
                <li><a href="">Item 3</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="login-layer">
            <div class="login-container">
                <h1>Login</h1>
                <form action="php/testLogin.php" method="POST" id="form-login">
                    <div class="full-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Insira seu email">
                    </div>
                    <div class="full-box">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Insira sua senha">
                    </div>
                    <div class="full-box">
                        <input type="submit" name="submit" value="Entrar" class="submit-btn">
                    </div>
                </form>
                <p class="not-yet-register">Não tem uma conta? <a href="register.php">Crie uma</a></p>
            </div>
        </div>
    </main>
</body>
</html>