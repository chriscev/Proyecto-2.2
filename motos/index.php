
<?php
session_start();

require 'database.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>DIEGO MORON</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!-- <?php 
        var_dump($_SESSION);
    ?> -->
    <div class="banner">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container">
                <span><img src="img/Logo1.png" height="100" alt="logo" /></span>
                <a href="" class="navbar-brand fw-bold">DIEGO MORON</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navtoggler">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <?php if (isset($_SESSION['USER'])): ?>
                    <div class="collapse navbar-collapse" id="navtoggler">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"> <a href="index.php" class="nav-link text-light fw-bold">Inicio</a></li>
                        <li class="nav-item"> <a href="abm.php" class="nav-link text-light fw-bold">Promociones</a></li>
                        <li class="nav-item"> <a href="products.php" class="nav-link text-light fw-bold">Contactos</a></li>
                        <li class="nav-item"> <a href="controller_logout.php" class="nav-link text-light fw-bold">Cerrar Sesión</a></li>
                    
                    </ul>
                    </div>
                <?php else: ?>
                    <div class="collapse navbar-collapse" id="navtoggler">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"> <a href="index.php" class="nav-link text-light fw-bold">Inicio</a></li>
                        <li class="nav-item"> <a href="view_login.php" class="nav-link text-light fw-bold">Iniciar Sesión</a></li>
                        <li class="nav-item"> <a href="signup.php" class="nav-link text-light fw-bold">Registrarse</a></li>
                    </ul>
                    </div>
                <?php endif; ?>
                
            </div>
        </nav>
        <h1 class="fw-bold display-2 text-center text-light banner-heading">
            Para volar se necesitan solo dos ruedas.
        </h1>
        
        <div class="text-center">
            <button class="btn btn-warning text-light"><a href="products.php" class="nav-link">Contactos</a></button>
        </div>
        <div class="text-center">
            <button class="btn btn-warning text-light"><a href="abm.php" class="nav-link">Promociones</a></button>
        </div>
    </div>
</body>

</html>