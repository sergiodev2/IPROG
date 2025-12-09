<?php
/*
Define una palabra. Usa un bucle for para imprimir cada carácter, 
pero solo los que están en posición impar (1, 3, 5, etc.). */
$palabra = "Genio";
for ($i = 0; $i < strlen($palabra); $i = $i + 2){
    echo $palabra[$i];
}

?>
