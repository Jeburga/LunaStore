<?php
require 'db.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Procesar crear empleado desde formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $puesto = $_POST['puesto'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Insertar el nuevo empleado en la base de datos
    $stmt = $conn->prepare("INSERT INTO empleados (nombre, puesto, email, telefono) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $puesto, $email, $telefono);

    if ($stmt->execute()) {
        echo "<script>alert('Empleado agregado con éxito')</script>";
    } else {
        echo "<script>alert('Error al agregar el empleado')</script>";
    }

    $stmt->close();
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
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <?php include "admin_header.php"; ?>

    <section class="seccionEmpleados">
        <div class="container mt-4">
            <form class="d-flex gap-3" method="GET">
                <input class="form-control" type="search" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Ingrese nombre del trabajador">
                <input class="btn btn-outline-dark" type="submit" value="Buscar">
            </form>
        </div>

        <div class="d-flex container mt-4 justify-content-end">
            <button class="btn btn-dark me-2" data-bs-toggle="modal" data-bs-target="#agregarEmpleadoModal">
                <i class="fa-solid fa-user-plus"></i> Agregar Empleados
            </button>
            <button class="btn btn-outline-dark">
                <i class="fa-regular fa-file-pdf"></i> Descargar Empleados
            </button>
        </div>

        <div class="container mt-5 mb-5 text-center">
            <h2 class="mt-4 mb-4">Tabla de Empleados</h2>
            <?php if ($resultEmpleados && $resultEmpleados->num_rows > 0) { ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre del Empleado</th>
                            <th>Cargo del Empleado</th>
                            <th>Teléfono del Empleado</th>
                            <th colspan="3" style="text-align:center;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $resultEmpleados->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row["nombre"]); ?></td>
                                <td><?php echo htmlspecialchars($row["puesto"]); ?></td>
                                <td><?php echo htmlspecialchars($row["telefono"]); ?></td>
                                <td class="option">
                                    <button class="btn btn-success" data-bs-toggle="tooltip" title="Ver">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </td>
                                <td class="option">
                                    <button class="btn btn-warning" data-bs-toggle="tooltip" title="Editar">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </td>
                                <td class="option">
                                    <button class="btn btn-danger" data-bs-toggle="tooltip" title="Eliminar">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
        </div>

        <div class="modal fade" id="agregarEmpleadoModal" tabindex="-1" aria-labelledby="agregarEmpleadoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agregarEmpleadoModalLabel">Agregar Nuevo Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre y apellidos</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="puesto" class="form-label">Puesto</label>
                                <input type="text" class="form-control" id="puesto" name="puesto" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark">Crear empleado</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
</body>
</html>
