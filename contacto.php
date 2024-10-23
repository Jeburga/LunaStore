<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto - Clínica Veterinaria</title>
    <meta name="description" content="Contacta con nuestra clínica veterinaria. Encuentra nuestra ubicación, horarios y datos de contacto.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2Q" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contacto.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="seccionWeb py-5">
            <div class="container">
                <h1 class="mb-3">Contacto</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section id="seccionContacto" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="./img/vet.jpg" alt="Clínica Veterinaria" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-4">Nuestros datos de contacto</h2>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-map-marker-alt me-2"></i>Dirección:</h5>
                                <p class="card-text">Juan Buendía 640, Urb. Patazca<br>Chiclayo, Chiclayo, Lambayeque</p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-phone me-2"></i>Número de contacto:</h5>
                                <p class="card-text">Cel: +51 996 233 083<br>Telf: (01) 800 800</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-envelope me-2"></i>Correo electrónico:</h5>
                                <p class="card-text">Jeburga9708@gmail.com<br>jeburga@hotmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="seccionHorario" class="seccionWeb py-5">
            <div class="container text-center">
                <h2 class="mb-4">Horario de atención</h2>
                <p class="mb-2">Lunes a viernes: 8:00 - 18:30</p>
                <p>Sábados: 8:30 - 14:30</p>
            </div>
        </section>

        <section id="ubicacion" class="py-5 bg-light">
            <div class="container text-center">
                <h2 class="mb-4">Ubícanos</h2>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.01161843347!2d-79.8515603!3d-6.7684366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ceede2c2b4439%3A0xbd9eb84f3b37cce1!2sJuan%20Buend%C3%ADa%20640%2C%20Chiclayo%2014009!5e0!3m2!1ses-419!2spe!4v1728613584120!5m2!1ses-419!2spe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <section id="seccionRedes" class="py-5">
            <div class="container text-center">
                <h2 class="mb-4">Síguenos en redes sociales</h2>
                <div class="d-flex justify-content-center gap-3">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/JB9708/" target="_blank" rel="noopener noreferrer" class="btn btn-lg" style="background-color: #3b5998; color: white;">
                        <i class="fab fa-facebook-f"></i>
                        <span class="ms-2 d-none d-sm-inline">Facebook</span>
                        <span class="badge bg-light text-dark ms-2">8</span>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/jesusburga97/" target="_blank" rel="noopener noreferrer" class="btn btn-lg" style="background-color: #ac2bac; color: white;">
                        <i class="fab fa-instagram"></i>
                        <span class="ms-2 d-none d-sm-inline">Instagram</span>
                        <span class="badge bg-light text-dark ms-2">99+</span>
                    </a>

                    <!-- Twitter -->
                    <a href="https://x.com/JessBurga3" target="_blank" rel="noopener noreferrer" class="btn btn-lg" style="background-color: #55acee; color: white;">
                        <i class="fab fa-twitter"></i>
                        <span class="ms-2 d-none d-sm-inline">Twitter</span>
                        <span class="badge bg-light text-dark ms-2">5</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>