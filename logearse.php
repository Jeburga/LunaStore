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
    // Añadamos un debug para verificar
    var_dump($_SESSION);
    header("Location: index.php");
    exit();
} else {
    header("Location: index.php?error=usuario o clave incorrecta");
    exit();
}

$sqlLogin->close();
$conn->close();
?>