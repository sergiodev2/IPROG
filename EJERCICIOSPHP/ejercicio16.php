<?php
/*Define un array de empleados con 
sus sueldos. Recorrelo e imprime solo el nombre de los que ganan más de 2000. */
$empleados = [
    "Julio" => 2100,
    "Mayte" => 2400,
    "Alberto" => 1400,
];

foreach ($empleados as $emple => $sueldo )
    if ($sueldo >= 2000){
        echo $emple . "\n";
    }


?>

