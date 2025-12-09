<?php 
/* Define una variable mes (del 1 al 12). Usa switch para
 imprimir el nombre del mes o "Mes no válido".  */


$mes = readline("");
switch ($mes){
    case 1:
        echo "Es enero";
        break;
    case 2:
        echo "Es febrero gachon";
        break;
    default:
        echo "El mes te lo inventas y te lo metes por el culo chiquito";
        break;
    }
?>