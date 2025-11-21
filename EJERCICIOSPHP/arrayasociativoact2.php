<?php
// DATOS INICIALES
// He asignado la clave 'E104' a Carlos, ya que en tu ejemplo le faltaba.
$empleados = [
    'E105' => 'Carlos Gutiérrez',
    'E101' => 'Ana López',
    'E103' => 'Benito Pérez',
    'E102' => 'Diana Castro',
];

function ordenarEmpleados($array, $criterio) {

    $auxiliar = $array;

    if ($criterio === 'ID') {
        ksort($auxiliar); 
    } elseif ($criterio === 'NOMBRE') {
        asort($auxiliar);
    }

    return $auxiliar;
}


// 1. Ordenado por ID Clave usando ksort
$ordenadoPorId = ordenarEmpleados($empleados, 'ID');

echo "--- Ordenado por ID (ksort) ---\n";
print_r($ordenadoPorId);


// 2. Ordenado por Nombre (Valor) usando asort
$ordenadoPorNombre = ordenarEmpleados($empleados, 'NOMBRE');

echo "\n--- Ordenado por Nombre (asort) ---\n";
print_r($ordenadoPorNombre);
?>