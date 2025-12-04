<?php
foreach ($contraseñas as $pass){
    $estado = "";
    if (strlen($pass) >= 8 && strpos($pass,"$") == true)
        $estado = "Segura";
    else
        $estado = "Debil";
}

// El ejercicio de arriba con un array otra opcion
$contraseñas = [
    'hola$1234',
    'contraseña',
    'segura$5678',
    '12345678$',
    'deb1l3'];

for ($i= 0; $i<count($contraseñas); $i++){
    $estado = "";
    if (strlen($contraseñas[$i]) >= 8 && strpos($contraseñas[$i],"$") == true)
        $estado = "Segura";
    else
        $estado = "Debil";
    echo "La contraseña " . $contraseñas[$i] . " es " . $estado . "\n";
}

?>