<?php

$servidor = "localhost";
$nombreUsuario ="root";
$password = "";
$database ="basechoho";

$conexion = new mysqli ($servidor, $nombreUsuario, $password, $database);

if($conexion-> connect_error){
die("conexión fallida: " . $conexion-> connect_error);
}

 /* ESTO FUE PARA CREAR LA BASE DE DATOS "basechoho", aún no sé como programar para que esta parte
 del código se ejecute solo una vez, por esta razón, lo comenté una vez se creó la BdD.

 $sql = "CREATE DATABASE baseChoho";
 if($conexion->query($sql) === true){
    echo "¡Base de datos CHOHO creada correctamente!";
 } else{
    die("Error al crear base de datos CHOHO: . $conexion->error");
 } 
 */

 /*

    # ESTE CÓDIGO FUE PARA CREAR LA TABLA "clientes".
    $sql = "CREATE TABLE clientes(
    nit INT(11) PRIMARY KEY,
    razonsocial VARCHAR(100) NOT NULL,
    idasesor INT(5) NOT NULL,
    fechacreacion TIMESTAMP
    )";
    
    if($conexion->query($sql) === true){
        echo "La tabla se creó satisfactoriamente";
    } else{
        die("Error al crear la tabla clientes: " . $conexion->error);
    }

 */   

    /* CON ESTE CÓDIGO SE CREÓ LA TABLA "asesores".

    $servidor = "localhost";
    $nombreUsuario ="root";
    $password = "";
    $database ="basechoho";

    $conexion = new mysqli ($servidor, $nombreUsuario, $password, $database);

    if($conexion-> connect_error){
    die("conexión fallida: " . $conexion-> connect_error);
    }

    $sql = "CREATE TABLE asesores(
    idasesor INT(5) AUTO_INCREMENT PRIMARY KEY,
    nombreasesor TEXT (100) NOT NULL,
    fechacreacionas TIMESTAMP
    )";
    
    if($conexion->query($sql) === true){
        echo "La tabla se creó satisfactoriamente";
    } else{
        die("Error al crear la tabla asesores: " . $conexion->error);
    }
    
    



    # CON ESTE CÓDIGO SE CREÓ LA TABLA "productos".

    $sql = "CREATE TABLE productos(
    idproducto INT(13) PRIMARY KEY,
    descripcion VARCHAR (100) NOT NULL,
    presentacion VARCHAR (15) NOT NULL,
    preciount INT(15) NOT NULL,
    familia VARCHAR (10) NOT NULL,
    fechacreacionprd TIMESTAMP
    )";
    
    if($conexion->query($sql) === true){
        echo "La tabla se creó satisfactoriamente";
    } else{
        die("Error al crear la tabla productos: " . $conexion->error);
    }

*/


 
    # CON ESTE CÓDIGO SE CREÓ LA TABLA "pedidos".
    $sql = "CREATE TABLE pedidos(
    numeropedido INT(5) PRIMARY KEY AUTO_INCREMENT,
    nit INT (10) NOT NULL,
    razonsocial VARCHAR (100) NOT NULL,
    idasesor INT(5) NOT NULL,
    idproducto INT(13) NOT NULL,
    cantidad INT(4) NOT NULL,
    preciount INT(15) NOT NULL,
    familia VARCHAR (10),
    fechapedido TIMESTAMP
    )";
    
    if($conexion->query($sql) === true){
        echo "La tabla se creó satisfactoriamente";
    } else{
        die("Error al crear la tabla pedidos: " . $conexion->error);
    }


?>




