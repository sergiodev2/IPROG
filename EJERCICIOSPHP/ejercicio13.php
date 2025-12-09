<?php

for ($i = 1; $i <= 3; $i++ ){
    echo "Tabla del " . $i . "\n";
    for ($j = 0; $j <= 10; $j++ ){
        $multi = $i * $j;
        echo "$i x  $j =  " . $multi . "\n";
    }}

?>