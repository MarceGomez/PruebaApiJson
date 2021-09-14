<?php

#Funciones sin parámetros

function saludo (){ #Aquí estamos declarando la función

    echo "hola<br>";
      
}

saludo(); #Aquí estamos nombrando para su respectiva ejecusión

#Funciones con parámetros

function despedida ($adios){

    echo $adios."<br>"; #El punto sirve para combinar o concatenar una variable con una cadena de texto.

}

despedida("hasta luego");

#Funciones con retorno

function retorno ($retornar){

    return $retornar;

}

echo retorno (retorno)

?>

