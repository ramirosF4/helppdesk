<?php
  session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/plantilla.css">
    <title>help-desk</title>
</head>
<body>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
  <div class="container">
    <a class="navbar-brand" href="inicio.php">help-desk</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="inicio.php">Inicio</a>
        </li>
        <?php if($_SESSION['usuario']['rol'] == 1){ ?>
        <li class="nav-item">
          <a class="nav-link" href="misDispositivos.php">Mis disositivos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="misReportes.php">Reportes soporte</a>
        </li>
        <?php }elseif ($_SESSION['usuario']['rol'] == 2) { ?>
        <!-- De aqui son las vistas del administrador-->
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="asignacion.php">Asignacion de equipos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reportes.php">Reportes</a>
        </li>
        <?php } ?>
        <li class="nav-item dropdown" >
          <a style="color: red;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario: <?php echo $_SESSION['usuario']['nombre'];?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Editar Datos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../procesos/usuarios/login/salir.php">Salir</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>