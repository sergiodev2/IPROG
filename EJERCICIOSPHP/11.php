<html>
    <head>
        <title>ARRAY ASOCIATIVO</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php 
    // Pon 4 frutas, con nombre, origen, precio y cantidad de kilo y ahora calcula cuanto cuesta la compra entera si quiero comprar 2 kilos de 2 frutas, cadda fruta es un array
    
    $fruta= array(
        array("nombre"=>"Manzana", "origen"=>"España", "precio"=>1.5, "cantidad_kilo"=>10),
        array("nombre"=>"Plátano", "origen"=>"Argelia", "precio"=>1.2, "cantidad_kilo"=>8),
        array("nombre"=>"Naranja", "origen"=>"China", "precio"=>1.3, "cantidad_kilo"=>15),
        array("nombre"=>"Fresa", "origen"=>"Alemania", "precio"=>2.0, "cantidad_kilo"=>5)
    );
    #mostrar
    foreach($fruta as $et => $valor) {
        echo "Fruta: " . $valor['nombre'] . "<br>";
        echo "Origen: " . $valor['origen'] . "<br>";
        echo "Precio por kilo: " . $valor['precio'] . " €<br>";
        echo "Cantidad disponible: " . $valor['cantidad_kilo'] . " kg<br><br>";
    }
    #actualizar precio por precio * 1.1
    foreach($fruta as $et => $valor) {
        $fruta[$et]['precio'] = $valor['precio'] * 1.1;
    }
    

    
    ?>
    </body>
</html>