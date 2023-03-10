<?php

    // if(isset($_POST['submit'])){
    //     print_r($_POST['nome']);
    //     print_r($_POST['email']);
    //     print_r($_POST['password']);
    // } else {
    //     echo "Algo de ruim aconteceu";
    // }

    if(isset($_POST["submit"]) && $_POST["password"] == $_POST["passwordConfirm"]){
        include_once("php/config.php");
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($connection, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$password')");

        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/register.js" defer></script>
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
                <h1>Cadastro</h1>
                <form action="register.php" method="POST" id="form-login">
                    <div class="full-box">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
                    </div>
                    <div class="full-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Insira seu email">
                    </div>
                    <div class="full-box">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Insira sua senha">
                    </div>
                    <div class="full-box">
                        <label for="passwordConfirm">Confirme a senha</label>
                        <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Insira novamente sua senha">
                    </div>
                    <div class="full-box">
                        <input type="submit" name="submit" value="Registrar" class="submit-btn" id="submit-btn">
                    </div>
                </form>
                <p class="not-yet-register">Já tem uma conta? <a href="index.php">Acessar login</a></p>
            </div>
        </div>
    </main>
</body>
</html>