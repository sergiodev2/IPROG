<?php
/* Pide una respuesta. Limpia espacios (trim) 
y conviértela a minúsculas (strtolower). Comprueba si es exactamente "si". */
$respuesta = "Si";
$respuestamod = trim(strtolower($respuesta));
if ($respuestamod == "si"){
    echo "Es un si";
}
else {
    echo "es otra cosa";
}

?>