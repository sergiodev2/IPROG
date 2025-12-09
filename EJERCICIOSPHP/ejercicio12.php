<?php

$ing = array("masa","tomate");
$ingrediente = readline("Mete un ingrediente: ");
if (in_array($ingrediente, $ing)){
    echo "El ingrediente ya existe \n";
}else{
    echo "El ingrediente no existe \n";
}

?>