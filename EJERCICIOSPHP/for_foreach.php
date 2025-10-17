<html>
    <body>
        <?php
        #El for es un bucle que se ejecuta un numero determinado de veces
        echo "Ejemplo con for";
        echo "<br>";
        for ($contador = 1; $contador <= 10; $contador = $contador + 1) {
                echo "El contador vale " . $contador;
                echo "<br>"; }
        echo "Ejemplo con foreach";
        echo "<br>";

        #El foreach es un bucle que recorre todos los elementos de un array
        $notas = array(5,3,2,7,10,9,8,2,4);
        $aprobados = 0;
        $suspensos = 0;
        foreach ($notas as $nota) {
            if ($nota >= 5) {
                $aprobados = $aprobados + 1; }
            else {
                $suspensos = $suspensos + 1; } }
        echo "El numero de aprobados es " . $aprobados;
        echo "<br>";
        echo "El numero de suspensos es " . $suspensos;
        ?>
    </body>
</html>