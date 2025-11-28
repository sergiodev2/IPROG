<?php

$n1 = [
    'Matemáticas' => 7.5,
    'Lengua'      => 8.0,
    'Historia'    => 6.0,
];

$n2 = [
    'Matemáticas' => 8.5, 
    'Inglés'      => 9.0,
];

$boletin_final = array_merge($n1, $n2);

echo " Notas \n";
foreach ($boletin_final as $asignatura => $nota) {
    echo "$asignatura: $nota\n";
}

$suma_total = array_sum($boletin_final);
$cantidad_asignaturas = count($boletin_final);

$media = $suma_total / $cantidad_asignaturas;

echo "\n Nota Media: " . $media;
?>