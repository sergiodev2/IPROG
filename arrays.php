<html>
<body>
<?php
#Un array almacena varios valores en cambio una variable 
    $cars = array("Volvo", "BMW", "Toyota");
    # var_dump($cars);
    echo "Mi coche es un: " . $cars[2];
#Puede almacenar diferentes tipos de datos 
    $alumno = array("Sergio", "Castilla", "Roncel", 19, 9, "aprobado");
    echo "<br>" . $alumno[0]. " " . $alumno[1] . " " . $alumno[2] . " ha aprobado con ". $alumno[3] . " años";
    $fruteria = array("pera", 1.60, 4);
    echo "<br>" . "La " . $fruteria[0] . " está a " . $fruteria[1] . "€ el kg";
    $coste = $fruteria[2] * $fruteria[1];
    echo "<br>La compra ha costado " . $coste . "€"
?>
</body>
</html>