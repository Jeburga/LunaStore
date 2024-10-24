<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Validamos si hay una sesión conectada y redirigimos
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

// Capturar mensaje de error
$error = '';
if (isset($_SESSION['error'])){
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2Q">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css?v=1">
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
            
        <?php if(!empty($error)): ?>
            <div class="alert alert-danger text-center">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

            <h3 class="text-center mb-4">Ingresa a tu cuenta</h3>
            <form action="logearse.php" method="post">
                <div class="form-group mt-3">
                    <label class="form-label" for="user">Nombre de usuario:</label>
                    <input type="text" class="form-control" id="user" name="user" required>
                </div>

                <div class="form-group mt-3">
                    <label class="form-label" for="inputPassword">Contraseña:</label>
                    <div class="position-relative">
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" minlength="8" placeholder="Contraseña" required>
                        <i class='bx bx-show-alt' id="visorPassword"></i>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary mt-3" value="Registrarme">
            </form>
            <p class="mt-3 text-center">¿Aún no estás registrado? Regístrate <a class="text-dark" href="./registro.php">aquí</a></p>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>