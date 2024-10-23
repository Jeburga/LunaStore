<?php
session_start();

// Verificar si el usuario ya está logueado
if (isset($_SESSION['user'])) {
    // Mensaje de depuración para verificar si la sesión existe
    echo "Sesión activa para el usuario: " . $_SESSION['user'];
    header('Location: gracias.php'); // Redirigir al usuario a la página de inicio
    exit();
} else {
    echo "No hay sesión activa.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2Q">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="seccionWeb">
        <div class="container">
            <h1>Login</h1>
            <p class="mt-3"> <i class="fa-solid fa-map-pin"></i> Inicio / Login</p>
        </div>
    </section>

    <section id="seccionLogin">
        <div id="contenedorLogin" class="container pt-5 pb-5">
            <h3 class="text-center mb-4">Ingresa a tu cuenta</h3>
            <form action="logearse.php" method="post">
                <div class="form-group mt-3">
                    <label class="form-label" for="inputUser">Nombre de usuario:</label>
                    <input type="text" class="form-control" id="inputUser" name="inputUser" required>
                </div>

                <div class="form-group mt-3">
                    <label class="form-label" for="inputPassword">Contraseña:</label>
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                </div>
                <input type="submit" class="btn btn-primary mt-3" value="Registrarme">
            </form>
            <p class="mt-3 text-center">¿Aún no estás registrado? Regístrate <a class="text-dark" href="./registro.php">aquí</a></p>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>