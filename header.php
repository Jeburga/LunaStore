<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php">
    <img id="imgLogo" src="./img/logo.jpg" width="100px" alt="logo">
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto"> <!-- Añadido me-auto para espaciado correcto -->
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="Productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="empleados.php">Empleados</a>
      </li>
      
      <?php if(isset($_SESSION['user'])): ?> <!-- Mostrar solo si hay sesión -->
        <li class="nav-item">
          <a class="nav-link active" href="Sucursales.php">Sucursales</a>
        </li>
      <?php endif; ?>
      
      <?php if(!isset($_SESSION['user'])): ?> <!-- Mostrar solo si NO hay sesión -->
        <li class="nav-item">
          <a class="nav-link active" href="registro.php">Registrate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Login</a>
        </li>
      <?php endif; ?>
      
      <li class="nav-item">
        <a class="nav-link active" href="contacto.php">Contacto</a>
      </li>
    </ul>
    
    <?php if(isset($_SESSION['user'])): ?> <!-- Muestra información solo si hay sesión -->
    <div class="d-flex align-items-center gap-3">
      <img src="./img/userlogo.png" alt="logo usuario" width="45px" style="border: solid black 1px; border-radius:5px; padding:5px;">
      <span class="text-capitalize"><strong>Bienvenido, <?php echo htmlspecialchars($_SESSION['user']); ?></strong></span>
      <a href="./logout.php" class="btn btn-danger text-white text-decoration-none">Cerrar sesión</a>
    </div>
    <?php endif; ?>
  </div>
</div>
</nav>