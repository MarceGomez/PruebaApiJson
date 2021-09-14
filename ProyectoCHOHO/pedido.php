<?php

include_once 'db.php';

class Pedido extends DB{

    function obtenerPedidos(){
        $query = $this->connect()->query('SELECT * FROM pedidos');

        return $query;
    }

    function obtenerPedido($idasesor){
        $query = $this->connect()->prepare('SELECT * FROM pedidos WHERE idasesor = :idasesor');
        $query->execute(['idasesor' => $idasesor]);

        return $query;
    }
}

?>