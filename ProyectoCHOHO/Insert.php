<?php

//Query MySQL para insertar datos en las tablas

    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $db = "basechoho";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }

 
  //echo "Conexion a basechoho";
 
$sql = "INSERT INTO clientes (nit, razonsocial, idasesor, fechacreacion) VALUES ('123456789','ANTONIO MALAVER','1','')";


//Estas actualizaciones de tablas con query, preferí usarlo directamente en phpMyAdmin


?>