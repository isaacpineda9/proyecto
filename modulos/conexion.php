<?php
    $host ="localhost";
    $username ="root";
    $password ="";
    $database ="inventario_maquinas";

    $conn = mysqli_connect($host,$username,$password,$database);

    if (!$conn){
        echo "error en la conexion";
    }else{
        //echo "conexion exitosa";
    }
?>