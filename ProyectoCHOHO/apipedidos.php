<?php

include_once 'pedido.php'; #Esta sentencia permite llamar el código que hace conexión a la BdD.

class ApiPedidos{

    function getAll(){
        $pedido = new Pedido();
        $pedidos = array();
        $pedidos["items"] = array(); //Esto permite que se haga una especie de segmentación para cada uno de los elementos.
    

        $respuesta = $pedido->obtenerPedidos();

        if($respuesta->rowCount()){

         while($row = $respuesta->fetch(PDO::FETCH_ASSOC)){

            $item = array( // Cuando se haga la consulta estos son los elementos que se van a imprimir en la API
                'idasesor' => $row['idasesor'],
                'nit' => $row['nit'],
                'razonsocial' => $row['razonsocial'],
                'numeropedido' => $row['numeropedido'],
                'idproducto' => $row['idproducto'],
                'cantidad' => $row['cantidad'],
                'preciount' => $row['preciount']

            );
            array_push($pedidos['items'], $item);
        }

        $this->printJSON($pedidos);

        }else{
       
        echo json_encode(array('mensaje' => 'No hay pedidos registrados para este codigo de asesor'));
        
        }

    }

    // Este código a continuación es para poder hacer el filtro de consulta por IdAsesor.

    function getById($idasesor){
        $pedido = new Pedido();
        $pedidos = array();
        $pedidos["items"] = array();

        $respuesta = $pedido->obtenerPedido($idasesor);

        if($respuesta->rowCount() == 1){
            $row = $respuesta->fetch();
        
            $item=array(
                'idasesor' => $row['idasesor'],
                'nit' => $row['nit'],
                'razonsocial' => $row['razonsocial'],
                'numeropedido' => $row['numeropedido'],
                'idproducto' => $row['idproducto'],
                'cantidad' => $row['cantidad'],
                'preciount' => $row['preciount']
            );
            array_push($pedidos["items"], $item);
            $this->printJSON($pedidos);
        }else{
            echo json_encode(array('mensaje' => 'No hay pedidos registrados para este codigo de asesor'));
        }
    }

    function error($mensaje){
        echo json_encode(array('mensaje' => $mensaje)); 
    }

    function printJSON($array){
        echo '<code>' . json_encode($array) . '</code>';
    }
}

?>
