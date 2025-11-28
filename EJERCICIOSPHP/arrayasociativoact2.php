<?php
$empleados = [
    'E105' => 'Carlos Gutiérrez',
    'E101' => 'Ana López',
    'E103' => 'Benito Pérez',
    'E102' => 'Diana Castro',
];

function ordenarEmpleados($array, $criterio) {

    $auxiliar = $array;

    ksort($auxiliar); 
    asort($auxiliar);

    return $auxiliar;
}

$ordenadoporid = ordenarEmpleados($empleados, $criterio);

echo "Ordenado por ID \n";
print_r($ordenadoporid);


$ordenadoPorNombre = ordenarEmpleados($empleados, 'NOMBRE');

echo "\n Ordenado por Nombre \n";
print_r($ordenadoPorNombre);
?>