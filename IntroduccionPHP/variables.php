<?php

#Con el signo número también se puede comentar código en php

#Variable Numérica
$numero = 5; /*Cuando la variable es un número no necesita ir dentro de "comillas", solo es necesario cuando es una cadena de texto.*/
echo "Esto es una variable Número: $numero<br>";
var_dump ($numero); #Es una forma de identificar qué variables se están imprimiento y poder identificar errores en PHP.
echo "<br><br>";

#Variable texto
$palabra = "palabra";
echo "Esto es una variable de texto: $palabra<br>";
var_dump ($palabra);
echo "<br><br>";

#Variable boleana
$boleana = true; #En PHP cuando es verdadero imprime como resultado "1", cuando es falso imprime "0"
#si fuera $boleana = false; En PHP el resultado que imprime es "Campo vacío"
echo "Esto es una variable boleana: $boleana<br>";
var_dump ($boleana);
echo "<br><br>";

#Variable arreglo
$colores = array("rojo","amarillo","verde");
echo "Esto es una variable arreglo: $colores[0]<br>"; #Se empieza desde cero, en este caso el 0 sería el color rojo, el 1 el amarillo y el 3 el verde, esto será lo que imprima.
var_dump ($colores);
echo "<br><br>";

#Variable arreglo con propiedades
$verduras = array ("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura1]<br>";
var_dump ($verduras);
echo "<br><br>";

#Variables objeto
$frutas = (object) ["fruta1"=>"pera", "fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1<br>";
var_dump ($frutas);

?>