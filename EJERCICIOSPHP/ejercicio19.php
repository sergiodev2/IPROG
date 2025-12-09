<?php
/* Crea un array vacío. Usa un bucle while para agregar los nombres
 "Alumno 1", "Alumno 2", etc., hasta llegar a 10 alumnos. */

$alumnos = [];
$num = 1;
while ($num <= 10){
    array_push($alumnos, "Alumno" . $num);
    $num++ ;}
print_r($alumnos);
?>