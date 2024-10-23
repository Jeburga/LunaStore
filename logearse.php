<?php
include 'db.php';

$nombreUser = $_POST['inputUser'];
$passwordUser = $_POST['inputPassword'];

$sqlLogin = $conn->prepare("SELECT username, password FROM users WHERE username=? AND password=?");
$sqlLogin->bind_param("ss", $nombreUser, $passwordUser);
$sqlLogin->execute();

$resultLogin = $sqlLogin->get_result();

// Verificamos si hay resultados
if ($resultLogin->num_rows > 0) {
    session_start();
    $_SESSION['user'] = $nombreUser;
    header('Location: index.php');
} else {
    header('Location: index.php?error=usuario o clave incorrecta');
}


$sqlLogin->close();
$conn->close();
?>
