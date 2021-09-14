<?php

#CONDICIONES

$a = 5;
$b = 10;

if ($a > $b){ #Condicional

    echo "a es mayor que b";
    
}

else if ($a == $b){ #Y también

    echo "a es igual que b";

} 

else{ #Si no, entonces

    echo "a es menor que b";
    
}

echo "<br><br>";

#SUICHES

$dia = "domingo";

switch($dia){

    case 'sabado':
    echo "voy a estudiar php";
    break;
    
    case 'viernes':
    echo "voy de fiesta";
    break;

    case 'domingo':
    echo "voy a descansar";
    break;

    default: echo "voy a la universidad"; #En caso de no sea ninguno de los casos anteriores, imprime esta opción.
    
}

echo "<br><br>";


#CICLO WHILE

$n = 1;
while ($n <= 5){
    echo $n;
    $n++;
}

echo "<br><br>";


#CICLO DO WHILE

$p = 1;
do{
    echo $p;
    $p++;
}
while($p <= 5);

echo "<br><br>";


#CICLO FOR

for($i=1; $i <= 5; $i++){
    echo $i;
}


?>