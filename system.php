<?php
    session_start();

    if((!isset($_SESSION["email"]) == true) and (!isset($_SESSION["password"]) == true)){
        unset($_SESSION["email"]);
        unset($_SESSION["password"]);
        header("Location: index.php");
    }
    $logged = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
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
                <li class="exit"><a href="php/exit.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1 style="display: flex; justify-content: center; align-items: center; padding: 20px;"><?php echo $logged ?></h1>
        <h1 style="display: flex; justify-content: center; align-items: center; padding: 20px;">Você conseguiu acessar o site!</h1>
    </main>
</body>
</html>