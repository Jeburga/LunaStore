<?php
session_start();

if(!isset ($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2Q">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include 'admin_header.php'; ?>
    
    <section class="seccionWeb">
        <div class="container card bg-dark">
            <div class="row">
                <div class="col d-flex flex-column text-center mt-4 mb-4">
                    <i class="fa-solid fa-person text-white d-flex justify-content-center mb-2" style="font-size:3em;"></i>
                    <a href="./gestionar_empleados.php" class="text-white">Gestionar Empleados</a>
                </div>
                <div class="col d-flex flex-column text-center mt-4 mb-4">
                    <i class="fa-brands fa-product-hunt text-white d-flex justify-content-center mb-2"  style="font-size:3em;"></i>
                    <a href="./gestionar_productos.php" class="text-white">Gestionar Productos</a>
                </div>
                <div class="col d-flex flex-column text-center mt-4 mb-4">
                    <i class="fa-solid fa-shop text-white d-flex justify-content-center mb-2" style="font-size:3em;"></i>
                    <a href="./gestionar_sucursales.php" class="text-white">Gestionar Sucursales</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>