<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luna Store - Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2Q">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    
    <?php include 'header.php'; ?>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/banner1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/banner2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/banner3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <section class="productos">
        <div class="container text-center mt-5 mb-5">
            <h1 class="mb-3">Luna Store</h1>
            <h2>Tenemos lo mejor para tu mascota</h2>
            <div class="row mt-4">
                <div class="col-sm-12 col-md-4">
                    <img src="./img/perro1.jpg" class="img-fluid m-3"  alt="perro">
                    <h3>Accesorios</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <img src="./img/perro2.jpg"  class="img-fluid m-3" alt="perro">
                    <h3>Camitas</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <img src="./img/perro3.jpg" class="img-fluid m-3" alt="perro">
                    <h3>Collares y pecheras</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonios" class="p-5">
        <div id="contenedorTestimonio" class="container p-5 card">
            <h2 class="text-center">Testimonio de Nuestros Clientes</h2>

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
        
                  <div class="carousel-item active card mt-4 p-5">
                    <div class="row text-center justify-content-center align-content-center align-items-center">
                        <div class="col-sm-12 col-md-6">
                          <img src="./img/cliente1.jpg" class="img-fluid" style="border-radius: 20px" alt="cliente"/>
                        </div>
                        <div class="col-sm-12 col-md-6 mt-3">
                          <h2 class="mb-3">Hugie Cambell</h2>
                          <p>
                            "¡Luna Store ha sido un descubrimiento fantástico! Compré un collar personalizado para mi cachorro, Max, y estoy encantada con la calidad. El proceso de personalización fue muy sencillo y el resultado superó mis expectativas. El collar no solo es bonito, sino también duradero. Max lo lleva puesto desde hace meses y sigue como el primer día. Además, el servicio al cliente fue excelente, me ayudaron a elegir el tamaño perfecto. ¡Definitivamente volveré a comprar!"
                          </p>
                        </div>
                      </div>
                  </div>
            
                  <div class="carousel-item card mt-4 p-5">
                    <div class="row text-center justify-content-center align-content-center align-items-center">
                        <div class="col-sm-12 col-md-6">
                          <img src="./img/cliente2.jpg" class="img-fluid" style="border-radius: 20px" alt="cliente"/>
                        </div>
                        <div class="col-sm-12 col-md-6 mt-3">
                          <h2 class="mb-3">Kuri Ki Taka</h2>
                          <p>
                            "Como dueño de un gato, siempre estoy buscando juguetes seguros y divertidos. En Luna Store encontré una selección increíble. Compré varios juguetes interactivos y han sido un éxito total. Mi gato está más activo y entretenido, y yo estoy tranquilo sabiendo que los materiales son de alta calidad y seguros. La entrega fue rápida y todo llegó bien empaquetado. Aprecio mucho que Luna Store se preocupe tanto por la calidad como por la diversión de nuestras mascotas."
                          </p>
                        </div>
                      </div>
                  </div>
            
                  <div class="carousel-item card mt-4 p-5">
                    <div class="row text-center justify-content-center align-content-center align-items-center">
                        <div class="col-sm-12 col-md-6">
                          <img src="./img/cliente3.jpg" class="img-fluid" style="border-radius: 20px" alt="cliente"/>
                        </div>
                        <div class="col-sm-12 col-md-6 mt-3">
                          <h2 class="mb-3">Amelia Jones</h2>
                          <p>
                            "Recientemente adopté a mi primera mascota, una perrita rescatada, y Luna Store ha sido mi salvación. Su guía de productos para nuevos dueños me ayudó muchísimo a elegir lo esencial. Compré una cama ortopédica, un arnés ajustable y algunos juguetes educativos. Todo ha sido de gran calidad y mi perrita está feliz y cómoda. Lo que más me gusta es que ofrecen productos ecológicos y sostenibles. El servicio postventa también es genial, me han dado consejos muy útiles para el cuidado de mi nueva compañera. ¡Luna Store se ha ganado una cliente fiel!"
                          </p>
                        </div>
                      </div>
                  </div>
            
            
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>
    </section>

    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>