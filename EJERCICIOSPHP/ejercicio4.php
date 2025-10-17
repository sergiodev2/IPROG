<html>
    <body>
        <?php
        # Ejercicio para comprobar si un array de años es bisiesto 
        $anios = array(2000, 2001, 2004, 1900, 2020, 2021, 2024);

        foreach ($anios as $anio) {
            if ((($anio % 4 == 0) && ($anio % 100 != 0)) || ($anio % 400 == 0)) {
                echo "El año " . $anio . " es bisiesto.";
            } else {
                echo "El año " . $anio . " no es bisiesto.";
            }
            echo "<br>";
        }



        ?>
    </body>
</html>