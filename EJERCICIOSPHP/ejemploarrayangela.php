<?php
/*
    $zapatillas = [
    'codigo' => 'Plátano',
    'modelo' => 'Tigre', 
    'nombre' => 'Nike',
    'precio' => 100 ,
    'color' => 'Negro',
    'stock' =>  10
];


foreach ($zapatillas as $clave => $valor) {
    if ( $clave == 'precio' && $zapatillas['precio'] >= 100 ) {
        $zapatillas['precio'] = $zapatillas['precio'] * 0.85;
        print_r($zapatillas);
    };

} 

foreach ($zapatillas as $clave => $valor) {
    if ( $clave == 'color' && $zapatillas['color'] == "Negro" ) {
        $zapatillas['precio'] = $zapatillas['precio'] * 0.80;
        print_r($zapatillas);
    };
    
}

foreach ($zapatillas as $clave => $valor) {
    if ( $clave == 'color' && $zapatillas['color'] == "Negro" ) {
        $zapatillas['precio'] = $zapatillas['precio'] * 0.80;
        print_r($zapatillas);
    };
    
}
*/
$zapatillas = [
    'codigo' => 101,
    'modelo' => 'A6',
    'nombre' => 'Retro 4',
    'precio' => 150,
    'color' => 'negro',
    'stock' => 13
];
foreach ($zapatillas as $caracteristica => $valor) {
    if ($caracteristica == 'precio' and $zapatillas['precio'] > 100) {
        $zapatillas['precio'] = $zapatillas['precio']*0.85;
        print_r($zapatillas);
    };
    if ($caracteristica == 'color' and $zapatillas['color'] = 'negro') {
        $zapatillas['precio'] = $zapatillas['precio']*0.80;
        echo "<br>";
        print_r($zapatillas);
    };
    if ($caracteristica == 'stock' and $zapatillas['stock'] < 5) {
        $zapatillas['precio'] = $zapatillas['precio']*0.95;
        echo "<br>";
        print_r($zapatillas);
    }
    elseif ($caracteristica == 'stock' and $zapatillas['stock'] > 10){
        $zapatillas['precio'] = $zapatillas['precio']*1.01;
        echo "<br>";
        print_r($zapatillas);
    };
}

?>