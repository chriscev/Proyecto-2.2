<?php

    include("database.php");

    $id_moto=$_GET['id'];

    $sql="DELETE FROM motos  WHERE id_moto='$id_moto'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /motos/abm.php");
    }
?>
