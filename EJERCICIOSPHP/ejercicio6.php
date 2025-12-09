<?php 
/* Dada la frase: "La casa es azul, la casa es grande.", 
reemplaza todas las apariciones de "casa" por "coche". */
$frase = "La casa es azul, la casa es grande.";
$frasemod = str_replace("casa","coche", $frase); 
echo $frasemod;
?>