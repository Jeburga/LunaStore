<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2Q">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="seccionWeb">
        <div class="container">
            <div class="row">
                <div class="col-3 text-center">
                    <img id="thanksImg" src="./img/tk.jpg" class="img-fluid mb-4">
                </div>
            </div>
            <h1>Cuenta creada con éxito</h1>
            <p class="mt-3">¡Gracias por registrar tu cuenta!</p>
            <p>Te mantendremos informado sobre más novedades.</p>
            <button class="btn btn-success"><a href="./index.php">Inicio</a></button>
            <button class="btn btn-danger"><a href="./logout.php">Desconectarse</a></button>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>