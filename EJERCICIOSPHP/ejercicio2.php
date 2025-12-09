<?php
# Define un precio (ej: 15.50). Aplica un descuento del 10% solo si el precio es >= 20. Imprime el precio final.

$precio = 100;

if ($precio >= 20){
    $precio = $precio * 0.90;
    echo "El precio actual con el descuento del 10% por ser articulo con precio superior o igual a 20€ es de  " . $precio . "€";
}
else {
    echo "El precio se queda igual por que lo digo yo";
}



?>