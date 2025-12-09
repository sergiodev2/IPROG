<?php

$edad = 19;
if ($edad >= 18){
    if($edad % 2 == 0){
        echo $edad . " es par";}
    else{
        echo $edad . " es impar";
    }
}
else{
    echo "Eres menor y no te puedo decir si eres par o no";
}

?>