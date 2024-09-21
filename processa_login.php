<?php
session_start();

// Definindo login e senha

$valid_username = "jamilepimentel";
$valid_password = "12345";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redireciona para a home.php após o login

        header("Location: home.php");
        exit;
    } else {

        // Redireciona de volta para o login.php com erro
        
        header("Location: login.php?error=1");
        exit;
    }
}
?>