<?php
/* Pide dos números, A y B. Comprueba si (A>10)
 y si (B<5). Si ambas son ciertas, imprímelas. Si solo una, indica cuál. */

$a = 4;
$b = 3;
if ($a > 10 && $b < 5 ){
    echo "Ambas son ciertas";
}
elseif($a > 10){
    echo $a . " es mayor que 10 ";
}
elseif($b < 5){
    echo $b . " es menor que 10 ";
}


?>