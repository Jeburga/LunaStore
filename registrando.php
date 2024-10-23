<?php
include 'db.php';

$userName = $_POST['inputUser'];
$userEmail = $_POST['inputEmail'];
$userPassword = $_POST['inputPassword'];

$sqlVerificar = "SELECT * FROM users WHERE username = '$userName' OR email = '$userEmail'";
$resultVerificar = $conn->query($sqlVerificar);

if ($resultVerificar -> num_rows > 0){
    echo "<script>
        alert('Usuario o correo ya se encuentran registrados');
        window.location.href='registro.php';
    </script>";
} else {
    $sqlInsertarUsuario = "INSERT INTO users (username, email, password) VALUES ('$userName', '$userEmail', '$userPassword')";
    $resultInsertar = $conn->query($sqlInsertarUsuario);

    if($resultInsertar) {
        echo "<script>alert('¡Cuenta creada con éxito!');
        window.location.href='gracias.php';
        </script>";
    } else {
        echo "<script>
        alert('Se presentó un error al momento de crear la cuenta. Intente de nuevo.')
        </script>";
    }
}


?>