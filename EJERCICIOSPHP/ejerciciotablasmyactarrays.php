<?php
/*  
for ($i = 1; $i <= 10; $i++ ){
    for ($j = 0; $j <= 10; $j++ ){
        $multi = $i * $j;
        echo "$i x  $j =  " . $multi . "\n";
    }

}
Tabla multiplicar
*/

/* Cubos de los numeros del 1 al 10 
for($i = 1; $i <= 10; $i++){
    echo "Cubo del $i = " . $i * $i * $i . "\n";
    }
*/
/* 
    $Baloncesto = array(
        "Horario" => "jueves y viernes",
        "Edad" => 0,
        "Equipación" => "Si",
        "Frecuencia" => "Semanal")
    );
        - Baloncesto:
                - Horario: jueves y viernes.    
                - Precio aficiliación: 15€/mes.
                - Edad media jugadores: Se calcula a partir de otro array.
                - Equipación oficial: Si/No.
                - Frecuencia partidos competeción: Semanal.

        - Padel:
                - Horario: lunes y miércoles.    
                - Precio aficiliación: 30€/mes.
                - Edad media jugadores: Se calcula a partir de otro array.
                - Equipación oficial: Si/No.
                - Frecuencia partidos competeción: Mensual.
        - Futbol:
                - Horario: Sábados.    
                - Precio aficiliación: 5€/mes.
                - Edad media jugadores: Se calcula a partir de otro array.
                - Equipación oficial: Si/No.
                - Frecuencia partidos competeción: Semanal.

$Baloncesto= array(
    "Nombre" =>"Edad") // De este array se saca la media de la edad
$Padel= array(
    "Nombre" =>"Edad") // De este array se saca la media de la edad
$Futbol= array(
    "Nombre" =>"Edad") // De este array se saca la media de la edad

*/
$Baloncesto = array(
        "Horario" => "Sabado",
        "Edad" => 0,
        "Equipación" => "Si",
        "Frecuencia" => "Semanal")
    ;
$padel = array(
        "Horario" => "jueves y viernes",
        "Edad" => 0,
        "Equipación" => "Si",
        "Frecuencia" => "Semanal")
    ;
$futbol = array(
        "Horario" => "Martes",
        "Edad" => 0,
        "Equipación" => "Si",
        "Frecuencia" => "Semanal")
    ;
$personasB = [
    "Sergio" => 16,
    "Martin" => 14,
    "Ana" => 16,
    "Julio" => 19,
];
$personasP = [
    "Lola" => 20,
    "Mario" => 23,
    "Pablo" => 16,
    "Manolo" => 19,
];

$personasF = [
    "Lola" => 20,
    "Mario" => 23,
    "Pablo" => 16,
    "Manolo" => 19,
];

$media = 0;
    foreach ($personasB as $nombre=>$edad) {
        $media = $media + $edad;
        
    };
    $media = $media / count($personasB);
    echo "La media de edad en baloncesto es de : " . $media . "\n";

$media2 = 0;
    foreach ($personasP as $nombre=>$edad) {
        $media2 = $media2 + $edad;
        
    };
    $media2 = $media2 / count($personasP);
    echo "La media de edad en padel es de : " . $media2 . "\n";


$media3 = 0;
    foreach ($personasF as $nombre=>$edad) {
        $media3 = $media3 + $edad;
        
    };
    $media3 = $media3 / count($personasF);
    echo "La media de edad en Futbol es de : " . $media3 . "\n";


//b.- Inserta la edad en el array correspondiente (actualizar)
$Baloncesto["Edad"] = $media;
$padel["Edad"] = $media2;
$futbol["Edad"] = $media3;

//c.- Inserta un nuevo campo llamado "federado", donde se asocie
// el nombre del equipo federado
$Baloncesto["Federado"] = "Equipo A";
$padel["Federado"] = "Equipo B";
$futbol["Federado"] = "Equipo C";


// d.- Elemina la información referente a la frecuencia.
unset($Baloncesto["Frecuencia"]);
unset($padel["Frecuencia"]);
unset($futbol["Frecuencia"]);


?>