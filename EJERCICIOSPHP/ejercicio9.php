<?php 
/* Pide un país. Usa un array asociativo.
 Imprime solo la capital del país que elijas. */
$paises = [
    "mongolia" => "mongolo",
    "kenia" => "zimbawe",
    "afganistan" => "karchaoui",
];

$pais_elegido = "kenia";
foreach ($paises as $pais => $capital)
    if ($pais_elegido == $pais)
        echo $capital;
    
/* Ahora con la capital */

$paises2 = [
    "mongolia" => "mongolo",
    "kenia" => "zimbawe",
    "afganistan" => "karchaoui",
];

$capi_elegido = "zimbawe";
foreach ($paises2 as $pais2 => $capital2)
    if ($capi_elegido == $capital2)
        echo $pais2;


?>