<html>
    <body>
        <?php
        #La diferencia entre while y do while es que el do while se ejecuta al menos una vez
        #mientras que el while puede no ejecutarse nunca si la condicion no se cumple
        echo "Ejemplo con while";
        echo "<br>";
        $contador = 1;
        while ($contador <= 10) {
            echo "El contador vale " . $contador;
            echo "<br>";
            $contador = $contador + 1; }
        echo "Ejemplo con do while";
        echo "<br>";
        $contador = 1;
        do {
            echo "El contador vale " . $contador;
            echo "<br>";
            $contador = $contador + 1; }
        while ($contador <= 10);

        ?>

    </body>
</html>