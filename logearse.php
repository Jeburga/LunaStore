<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'db.php';

$user = $_POST['user'];
$passwordUser = $_POST['inputPassword'];

$sqlLogin = $conn->prepare("SELECT username, password FROM users WHERE username = ? AND password = ?");
$sqlLogin->bind_param("ss", $user, $passwordUser);
$sqlLogin->execute();

$resultLogin = $sqlLogin->get_result();

// Verificamos si hay resultados
if ($resultLogin->num_rows > 0) {
    $_SESSION['user'] = $user;
    header("Location: index.php");
} else {
    $_SESSION['error'] = "El usuario y/o la contraseña ingresada son incorrectos";
    header("Location: login.php");
}

$sqlLogin->close();
$conn->close();
?>