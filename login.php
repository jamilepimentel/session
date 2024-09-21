<?php

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: home.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Realize seu Login</title>
</head>

<body>

    <h2>Login</h2>
    <form action="processa_login.php" method="POST">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>

</body>

</html>