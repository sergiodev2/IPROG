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
        ?>
    </body>
</html>