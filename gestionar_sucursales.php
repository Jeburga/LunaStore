<?php
require 'db.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset ($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sqlSucursales = "SELECT nombre, direccion, telefono FROM sucursales WHERE nombre LIKE '%$search%'";
$resultSucursales = $conn->query($sqlSucursales);
?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include "admin_header.php"; ?>

    <section class="seccionEmpleados">
        <div class="container mt-4">
            <form class="d-flex gap-3" method="GET">
                <input class="form-control" type="search" name="search" value="<?php echo ($search)?>" placeholder="Ingrese nombre de la sucursal">
                <input class="btn btn-outline-dark" type="submit" value="Buscar">
            </form>
        </div>

        <div class="d-flex container mt-4 justify-content-end">
            <button class="btn btn-dark me-2">
            <i class="fa-solid fa-user-plus"></i> Agregar Sucursal
            </button>
            <button class="btn btn-outline-dark">
                <i class="fa-regular fa-file-pdf"></i> Descargar Sucursal
            </button>
        </div>

        <div class="container mt-5 mb-5 text-center">
            <h2 class="mt-4 mb-4">Tabla de Sucursales</h2>
            <?php if($resultSucursales && $resultSucursales->num_rows > 0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre de la Sucursal</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                        <th colspan="3" style="text-align:center;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $resultSucursales->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo ($row["nombre"])?></td>
                        <td><?php echo ($row["direccion"])?></td>
                        <td><?php echo ($row["telefono"])?></td>
                        <td class="option">
                            <button class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Ver">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </td>
                        <td class="option">
                            <button class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </td>
                        <td class="option">
                            <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Eliminar">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
</body>
</html>
