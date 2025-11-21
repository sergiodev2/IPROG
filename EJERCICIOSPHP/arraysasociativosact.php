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

// 1.a) Combinar en un único array todos los productos.
$productos = array_merge($ofertas, $regulares);


// 1.b) Indica qué sucede con aquellos productos que tienen la misma clave.
/*
    El valor del segundo array $regulares se sobreescribe al del primero ($ofertas).
    Por lo tanto, si el producto '003' tuviera nombres distintos, 
    se quedaría el nombre que aparece en $regulares.
*/


// 1.c) Partiendo del array “productos”, añade 2 o 3 productos nuevos.
$productos['006'] += 'Melón';
$productos['007'] += 'Sandía';
$productos['008'] += 'Kiwi';


// 1.d) Utiliza la función array_diff para obtener los productos que NO están en oferta.
//    array_diff compara los valores del primer array con los del segundo.

$no_oferta = array_diff($regulares, $ofertas);

echo " Array Combinado \n";
print_r($productos);

echo "\n Productos que no están en oferta \n";
print_r($no_oferta);
?>
