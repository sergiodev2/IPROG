<?php 
/* Pide una letra. Imprime la letra en mayúscula y 
comprueba si esa letra es la 'A'. */

$letra = readline("Inserta letra: ");
$mayus = strtoupper($letra);
echo "\n La letra es: " . $mayus;
if ($mayus == "A"){
    echo "la letra es una A mayuscula";}
else{
    echo "Que va chiquitin no es una A";
}


?>