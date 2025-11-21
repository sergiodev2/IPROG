
<?php
#Sergio Castilla Roncel



#Ejercicio 1

/*
$doblescaras = 0;
$carasseguidas = 0;
$tirada = 0;
echo" 1 equivale a cruz y 2 equivale a cara \n";

while ($doblescaras < 3) {

    $moneda1 = rand(1, 2);
    $moneda2 = rand(1, 2);
    $tirada++ ;
    echo "Tirada: $moneda1 y $moneda2\n";

    if ($moneda1 == 2 && $moneda2 == 2) {
        echo "    ¡Suerte Doble!\n";
        
        $doblescaras++; 
        $carasseguidas++;

        echo "    Dobles: $doblescaras \n";
        echo "    Consecutivos: $carasseguidas\n";

        if ($carasseguidas == 2) {
            echo "\n    ¡Dos dobles (1, 2) seguidos!\n";
            echo "Se reinicia a 0. \n";
            
            $doblescaras = 0;
            $carasseguidas = 0;
        }
        
    } 
        $carasseguidas = 0;
    }
    
    echo "\n"; 



echo "A la tirada numero " . $tirada . "\n"; */


#Ejercicio 2

$nombre="Ana";
$apellido1= "López";
$apellido2= "Mártos";
$edad=19;
$dni= "52076583Y";
$fechasarray = [];
$fechanacimiento = explode("/","08/09/2006");

$nombre = str_replace("Á","A", $nombre);
$apellido1 = str_replace("Á","A", $apellido1);
$apellido2 = str_replace("Á","A", $apellido2);

$nombre = str_replace("á","a", $nombre);
$apellido1 = str_replace("á","a", $apellido1);
$apellido2 = str_replace("á","a", $apellido2);

$nombre = str_replace("Ú","U", $nombre);
$apellido1 = str_replace("Ú","U", $apellido1);
$apellido2 = str_replace("Ú","U", $apellido2);

$nombre = str_replace("ú","u", $nombre);
$apellido1 = str_replace("ú","u", $apellido1);
$apellido2 = str_replace("ú","u", $apellido2);


$nombre = str_replace("Í","I", $nombre);
$apellido1 = str_replace("Í","I", $apellido1);
$apellido2 = str_replace("Í","I", $apellido2);

$nombre = str_replace("í","i", $nombre);
$apellido1 = str_replace("í","i", $apellido1);
$apellido2 = str_replace("í","i", $apellido2);

$nombre = str_replace("É","E", $nombre);
$apellido1 = str_replace("É","E", $apellido1);
$apellido2 = str_replace("É","E", $apellido2);

$nombre = str_replace("é","e", $nombre);
$apellido1 = str_replace("é","e", $apellido1);
$apellido2 = str_replace("é","e", $apellido2);

$nombre = str_replace("Ó","O", $nombre);
$apellido1 = str_replace("Ó","O", $apellido1);
$apellido2 = str_replace("Ó","O", $apellido2);

$nombre = str_replace("ó","o", $nombre);
$apellido1 = str_replace("ó","o", $apellido1);
$apellido2 = str_replace("ó","o", $apellido2);

$nombre = str_replace("Ñ","n", $nombre);
$apellido1 = str_replace("Ñ","n", $apellido1);
$apellido2 = str_replace("Ñ","n", $apellido2);

$nombre = str_replace("ñ","n", $nombre);
$apellido1 = str_replace("ñ","n", $apellido1);
$apellido2 = str_replace("ñ","n", $apellido2);

if ($apellido2 == ""){
    $apellido2 = "xxx";
    }

if ($edad >= 18) {
    echo strtolower(substr($nombre, 0, 1) . substr($apellido1, 0, 3) . substr($apellido2, 0, 3) . substr(strrev($dni), 1, 3)) . "@luisvelez.org";
} else {
    echo strtolower(substr($nombre, 0, 1) . substr($apellido1, 0, 3) . substr($apellido2, 0, 3) . $fechanacimiento[0] . $fechanacimiento[1]) . "@luisvelez.org";
}


?>
