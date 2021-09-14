<?php

//Validación de consulta de toda la base o por IdAsesor.

include_once 'apipedidos.php';

$api = new ApiPedidos();

if(isset($_GET['idasesor'])){
    $idasesor = $_GET['idasesor'];

    if(is_numeric($idasesor)){
        $api->getById($idasesor);
    }else{
        $api->error('El código de asesor es incorrecto');
    }
}else{
    $api->getAll();
}    


?>