
<?php
    session_start();
    $user = $_POST['user'];
    $password = $_POST['password'];

    require 'database.php';

    if (!isset($_SESSION['USER']) || empty($_SESSION['USER'])){ 
        $query = 'SELECT id_usuario, usuario, contrasenia FROM usuario_admin WHERE usuario = "$user" AND contrasenia = "$password"';
        $result = mysqli_query($con, $query);
        if($result) {
            $_SESSION['USER'] = $user;
            header('Location: /motos/index.php');
        } else {
            $_SESSION['ERROR_MSG'] = "usuario o contrasenia invalidos";
            header('Location: /motos/index.php');
        }
    } else { 
        header('Location: /motos/index.php');
    }
?>