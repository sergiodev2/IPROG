<?php
/* Define un código. Verifica que tiene exactamente
 6 caracteres y que empieza por la letra 'P' (substr). */
$codigo = "PDF345";
if(strlen($codigo) == 6 && substr($codigo,0,1) == "P" ){
    echo "Cumple todo";
}
elseif(strlen($codigo) == 6){
    echo "Solo cumple caracteres";
}
elseif(substr($codigo,0) == "P"){
    echo "Solo cumple empieza por la P";
}
else {
    echo "No cumple ni una macho";
}

?>