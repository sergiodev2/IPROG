<html>
    <body>
        <?php
        # si el precio del kg de una fruta es mayor o igual a 4
        /* --> Descuento de un 10%. Almacena el valor modificado en su posicion
           --> Sino, incremento un 5% el precio y actualizo */
        /*    $precioKG = array(10,11.3,1.28,4.7,2);
            if ($precioKG︃[0] >= 4) {
                $precioKG[0] = $precioKG[0] * 0.90; }
            else {
                $precioKG[0] = $precioKG[0] * 1.05;
            }
            if ($precioKG[1] >= 4) {
                $precioKG[1] = $precioKG[1] * 0.90; }
            else {
                $precioKG[1] = $precioKG[1] * 1.05;
            }
            if ($precioKG[2] >= 4) {
                $precioKG[2] = $precioKG[2] * 0.90; }
            else {
                $precioKG[2] = $precioKG[2] * 1.05;
            }
            if ($precioKG[3] >= 4) {
                $precioKG[3] = $precioKG[3] * 0.90; }
            else {
                $precioKG[3] = $precioKG[3] * 1.05;
            }
            if ($precioKG [4]>= 4) {
                $precioKG[4] = $precioKG[4] * 0.90; }
            else {
                $precioKG[4] = $precioKG[4] * 1.05;
            }
            echo "<br>";
            echo "El precio de la fruta es " . $precioKG[0];
            echo "<br>";
            echo "El precio de la fruta es " . $precioKG[1];
            echo "<br>";
            echo "El precio de la fruta es " . $precioKG[2];
            echo "<br>";
            echo "El precio de la fruta es " . $precioKG[3];
            echo "<br>";
            echo "El precio de la fruta es " . $precioKG[4];
        */
        echo "Otra forma de hacerlo con case";
        echo "<br>";
        $precioKG = array(10,11.3,1.28,4.7,2);
        switch ($precioKG[0] >= 4) {
            case true:
                $precioKG[0] = $precioKG[0] * 0.90;
                break;
            case false:
                $precioKG[0] = $precioKG[0] * 1.05;
                break;
        }
        echo "El precio de la fruta es " . $precioKG[0];
        echo "<br>";
        switch ($precioKG[1] >= 4) {
            case true:
                $precioKG[1] = $precioKG[1] * 0.90;
                break;
            case false:
                $precioKG[1] = $precioKG[1] * 1.05;
                break;
        }
        echo "El precio de la fruta es " . $precioKG[1];
        echo "<br>";
        switch ($precioKG[2] >= 4) {
            case true:
                $precioKG[2] = $precioKG[2] * 0.90;
                break;
            case false:
                $precioKG[2] = $precioKG[2] * 1.05;
                break;
        }
        echo "El precio de la fruta es " . $precioKG[2];
        echo "<br>";
        switch ($precioKG[3] >= 4) {
            case true:
                $precioKG[3] = $precioKG[3] * 0.90;
                break;
            case false:
                $precioKG[3] = $precioKG[3] * 1.05;
                break;
        }
        echo "El precio de la fruta es " . $precioKG[3];
        echo "<br>";
        switch ($precioKG[4] >= 4) {
            case true:
                $precioKG[4] = $precioKG[4] * 0.90;
                break;
            case false:
                $precioKG[4] = $precioKG[4] * 1.05;
                break;
        }
        echo "El precio de la fruta es " . $precioKG[4];
        echo "<br>";

        #hazlo con un bucle for
        echo "Otra forma de hacerlo con un bucle for";
        echo "<br>";
        $precioKG = array(10,11.3,1.28,4.7,2);
        for ($i = 0; $i < count($precioKG); $i++) {
            if ($precioKG[$i] >= 4) {
                $precioKG[$i] = $precioKG[$i] * 0.90;
            } else {
                $precioKG[$i] = $precioKG[$i] * 1.05;
            }
            echo "El precio de la fruta es " . $precioKG[$i];
            echo "<br>";
        }
        #hazlo con un bucle foreach
        echo "Otra forma de hacerlo con un bucle foreach";
        echo "<br>";
        $precioKG = array(10,11.3,1.28,4.7,2);
        foreach ($precioKG as $index => $precio) {
            if ($precio >= 4) {
                $precioKG[$index] = $precio * 0.90;
            } else {
                $precioKG[$index] = $precio * 1.05;
            }
            echo "El precio de la fruta es " . $precioKG[$index];
            echo "<br>";
        }
        # while
        echo "Otra forma de hacerlo con un bucle while";
        echo "<br>";
        $precioKG = array(10,11.3,1.28,4.7,2);
        $i = 0;
        while ($i < count($precioKG)) {
            if ($precioKG[$i] >= 4) {
                $precioKG[$i] = $precioKG[$i] * 0.90;
            } else {
                $precioKG[$i] = $precioKG[$i] * 1.05;
            }
            echo "El precio de la fruta es " . $precioKG[$i];
            echo "<br>";
            $i++;
        }
        #con do while
        echo "Otra forma de hacerlo con un bucle do while";
        echo "<br>";
        $precioKG = array(10,11.3,1.28,4.7,2);
        $i = 0;
        do {
            if ($precioKG[$i] >= 4) {
                $precioKG[$i] = $precioKG[$i] * 0.90;
            } else {
                $precioKG[$i] = $precioKG[$i] * 1.05;
            }
            echo "El precio de la fruta es " . $precioKG[$i];
            echo "<br>";
            $i++;
        } while ($i < count($precioKG));

        ?>
    </body>
</html>