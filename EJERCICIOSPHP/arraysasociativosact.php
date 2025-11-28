<?php

$ofertas = [
    '001' => 'Manzana Roja',
    '003' => 'Pera Verde',
    '005' => 'Naranja',
];

$regulares = [
    '002' => 'Plátano',
    '003' => 'Pera Verde', 
    '004' => 'Uva Negra',
];

// Combinar en un único array todos los productos.
$productos = array_merge($ofertas, $regulares);


// Indica qué sucede con aquellos productos que tienen la misma clave.
/*
    El valor del segundo array $regulares se sobreescribe al del primero $ofertas.
*/


$productos += ['006' => 'Melón'];
$productos += ['007' => 'Sandía'];
$productos += ['008' => 'Kiwi'];



$no_oferta = array_diff($productos, $ofertas);

echo " Array Combinado \n";
print_r($productos);

echo "\n No están en oferta \n";
print_r($no_oferta);
?>
