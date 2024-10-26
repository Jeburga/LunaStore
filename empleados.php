<?php
require 'db.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sqlEmpleados = "SELECT nombre, puesto, telefono FROM empleados WHERE nombre LIKE '%$search%'";
$resultEmpleados = $conn->query($sqlEmpleados);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
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
            <h1>Empleados</h1>
            <p class="mt-3"> <i class="fa-solid fa-map-pin"></i> Inicio / Empleados</p>
        </div>
    </section>

    <section class="seccionEmpleados">
        <div class="container mt-4">
            <form class="d-flex gap-3" method="GET">
                <input class="form-control" type="search" name="search" value="<?php echo ($search)?>" placeholder="Ingrese nombre del trabajador">
                <input class="btn btn-outline-dark" type="submit" value="Buscar">
            </form>
        </div>

        <div class="container mt-5 mb-5 text-center">
            <h2 class="mt-4 mb-4">Tabla de Empleados</h2>
            <?php if($resultEmpleados && $resultEmpleados->num_rows > 0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre del Empleado</th>
                        <th>Cargo del Empleado</th>
                        <th>Telefono del Empleado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $resultEmpleados->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo ($row["nombre"])?></td>
                        <td><?php echo ($row["puesto"])?></td>
                        <td><?php echo ($row["telefono"])?></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
            <?php
            }
            ?>
        </div>
    </section>

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
