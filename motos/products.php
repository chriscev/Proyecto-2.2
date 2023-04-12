<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="bg-dark">
<div class="mb-5">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container">
                <span><img src="img/Logo1.png" height="100" alt="logo" /></span>
                <a href="" class="navbar-brand fw-bold">DIEGO MORON</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navtoggler">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navtoggler">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"> <a href="index.php" class="nav-link text-light fw-bold">Inicio</a></li>
                        <li class="nav-item"> <a href="products.php" class="nav-link text-light fw-bold">Productos</a></li>
                        <li class="nav-item"> <a href="controller_logout.php" class="nav-link text-light fw-bold">Cerrar Sesión</a></li>
                    
                    </ul>
                </div>
            </div>
        </nav>
        <main id="main">


<section class="inner-page">
    <div class="row justify-content-center">
        <div class="col-5">
          <h3>Formulario de pedidos</h3>
        </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-5">
        <form> 
          <div class="form-group " >
            <label for="nombre">Nombre: </label>
            <input type="text" class="form-control form-control-sm" id="nombre" placeholder="Nombre" >
          </div>
          <div class="form-group " >
            <label for="apellido">Producto(1-3): </label>
            <input type="num" class="form-control form-control-sm" id="prod" placeholder="1=YAMAHA" >
          </div>
          <div class="form-group " >
            <label for="ci">Cantidad: </label>
            <input type="num" class="form-control form-control-sm" id="cant" placeholder="1" >
          </div>
          <button  class="btn btn-dark" onclick="main()">Enviar</button>
        </form>
    </div>
</section> 
</main><!-- End #main -->

<script>
  function main(){
      diego2();

  }
      function diego1(){
        var total = 0;  
          var cant = document.getElementById('cant').value;
          var prod = document.getElementById('prod').value; 

          if(prod==1)
          {
              total = cant*1999; 
          }
          if(prod==2){
            total = cant*2999;
          }
          if(prod==3){
            total = cant*3999;
          }
          return total;   
        }
        
        function diego3(){
        var total = "";  
          var prod = document.getElementById('prod').value; 

          if(prod==1)
          {
              total = "YAMAHA";; 
          }
          if(prod==2){
            total = "GIBSON";
          }
          if(prod==3){
            total = "FENDER";
          }
          return total;   
        }
  
  function diego2(){
    var nombre = document.getElementById('nombre').value;
    var prod = diego3();
    var cant = document.getElementById('cant').value;
    var datos = "Nombre: "+ nombre+"\nProducto: "+prod+"\nCantidad"+cant+"\nTotal: "+diego1();
    alert(datos);
    
  }
</script>
</body>

</html>