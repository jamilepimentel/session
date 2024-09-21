<?php

session_start();

// Verifica se o usuário está logado

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script>

        //  pop-up: login realizado
        
        window.onload = function() {
            alert('Login realizado com sucesso!');
        };
    </script>
</head>

<body>
    <h1>Olá!</h1>
    <p>Você está logado!</p>
    <a href="logout.php">Sair</a>
</body>

</html>