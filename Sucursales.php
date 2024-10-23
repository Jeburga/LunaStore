<?php require 'db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursales</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <?php include "header.php"; ?>
    <section class="seccionWeb">
        <div class="container">
            <h1>Sucursales</h1>
            <p class="mt-3"> <i class="fa-solid fa-map-pin"></i> Inicio / Sucursales</p>
        </div>
    </section>

    <section class="seccionEmpleados">
        <div class="container">
            <div class="row">
                <?php
                if ($resultSucursales->num_rows > 0) {
                    while ($row = $resultSucursales->fetch_assoc()) {
                        echo "
                            <div class='col-md-4 mb-4 mt-4'>
                                <div class='card'>
                                    <div class='card-body text-center'>
                                        <h5 class='card-title'>" . $row["nombre"] . "</h5>
                                        <h6 class='card-subtitle mb-2 text-muted'>" . $row["direccion"] . "</h6>
                                        <p class='card-text'>Teléfono: " . $row["telefono"] . "</p>
                                    </div>
                                </div>
                            </div>";
                    }
                } else {
                    echo "<p>No se encontraron resultados</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
