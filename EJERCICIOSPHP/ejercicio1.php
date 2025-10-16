<html>
    <body>
        <?php
        /* $aprobados -> el nª de notas "aprobados" -> 5 */
        /* $suspensos -> el nª de notas "suspensos" -> 4 */
/*            $aprobados = 0;
            $suspensos = 0;
            $notas = array(5,3,2,7,10,9,8,2,4);
            if ($notas[0] >= 5) {
                $aprobados = 1; }
            else {
                $suspensos = 1; }
            if ($notas[1] >= 5) {
                $aprobados = $aprobados + 1; }
            else {
                $suspensos = $suspensos + 1; }
            if ($notas[2] >= 5) {
                $aprobados = $aprobados + 1; }
            else {
                $suspensos = $suspensos + 1; }
            if ($notas[3] >= 5) {
                $aprobados = $aprobados + 1; }
            else {
                $suspensos = $suspensos + 1; }
            if ($notas[4] >= 5) {
                $aprobados = $aprobados + 1; }
            else {
                $suspensos = $suspensos + 1; } 
            if ($notas[5] >= 5) {
                $aprobados = $aprobados + 1; }
            else {
                $suspensos = $suspensos + 1; }
            if ($notas[6] >= 5) {
                $aprobados = $aprobados + 1; }
            else {
                $suspensos = $suspensos + 1; }
            if ($notas[7] >= 5) {
                $aprobados = $aprobados + 1; }
            else {
                $suspensos = $suspensos + 1; }
            if ($notas[8] >= 5) {
                $aprobados = $aprobados + 1; }
            else {
                $suspensos = $suspensos + 1; }
            echo "El numero de aprobados es " . $aprobados;
            echo "<br>";
            echo "El numero de suspensos es " . $suspensos; */

            echo "Otra forma de hacerlo con case";
            echo "<br>";
            $aprobados = 0;
            $suspensos = 0;
            $notas = array(5,3,2,7,10,9,8,2,4);
            switch ($notas[0] >= 5) {
                case true:
                    $aprobados = 1;
                    break;
                case false:
                    $suspensos = 1;
                    break;
            }
            switch ($notas[1] >= 5) {
                case true:
                    $aprobados = $aprobados + 1;
                    break;
                case false:
                    $suspensos = $suspensos + 1;
                    break;
            }
            switch ($notas[2] >= 5) {
                case true:
                    $aprobados = $aprobados + 1;
                    break;
                case false:
                    $suspensos = $suspensos + 1;
                    break;
            }
            switch ($notas[3] >= 5) {
                case true:
                    $aprobados = $aprobados + 1;
                    break;
                case false:
                    $suspensos = $suspensos + 1;
                    break;
            }
            switch ($notas[4] >= 5) {
                case true:
                    $aprobados = $aprobados + 1;
                    break;
                case false:
                    $suspensos = $suspensos + 1;
                    break;
            }
            switch ($notas[5] >= 5) {
                case true:
                    $aprobados = $aprobados + 1;
                    break;
                case false:
                    $suspensos = $suspensos + 1;
                    break;
            }
            switch ($notas[6] >= 5) {
                case true:
                    $aprobados = $aprobados + 1;
                    break;
                case false:
                    $suspensos = $suspensos + 1;
                    break;
            }
            switch ($notas[7] >= 5) {
                case true:
                    $aprobados = $aprobados + 1;
                    break;
                case false:
                    $suspensos = $suspensos + 1;
                    break;
            }
            switch ($notas[8] >= 5) {
                case true:
                    $aprobados = $aprobados + 1;
                    break;
                case false:
                    $suspensos = $suspensos + 1;
                    break;
            }
            echo "El numero de aprobados es " . $aprobados;
            echo "<br>";
            echo "El numero de suspensos es " . $suspensos; 
            #Ejercicio 1 con bucle foreach
            echo "<br>";
            echo "Otra forma de hacerlo con bucles foreach";
            echo "<br>";
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
            #Ejercicio 1 con bucle for
            echo "<br>";
            echo "Otra forma de hacerlo con bucles for: ";
            echo "<br>";
            $notas = array(5,3,2,7,10,9,8,2,4);
            $aprobados = 0;
            $suspensos = 0;
            for ($i = 0; $i < count($notas); $i++)
            {
                if ($notas[$i] >= 5) {
                    $aprobados = $aprobados + 1; }
                else {
                    $suspensos = $suspensos + 1; } }
            echo "El numero de aprobados es " . $aprobados;
            echo "<br>";
            echo "El numero de suspensos es " . $suspensos;
            #Ejercicio 1 con bucle while
            echo "<br>";
            echo "Otra forma de hacerlo con bucles while: ";
            echo "<br>";
            $notas = array(5,3,2,7,10,9,8,2,4);
            $aprobados = 0;
            $suspensos = 0;
            $i = 0;
            while ($i < count($notas))
            {
                if ($notas[$i] >= 5) {
                    $aprobados = $aprobados + 1; }
                else {
                    $suspensos = $suspensos + 1; }
                $i = $i + 1; }
            echo "El numero de aprobados es " . $aprobados;
            echo "<br>";
            echo "El numero de suspensos es " . $suspensos;

            #Ejercicio 1 con bucle do while
            echo "<br>";
            echo "Otra forma de hacerlo con bucles do while: ";
            echo "<br>";
            $notas = array(5,3,2,7,10,9,8,2,4);
            $aprobados = 0;
            $suspensos = 0;
            $i = 0;
            do
            {
                if ($notas[$i] >= 5) {
                    $aprobados = $aprobados + 1; }
                else {
                    $suspensos = $suspensos + 1; }
                $i = $i + 1; }
            while ($i < count($notas));
            echo "El numero de aprobados es " . $aprobados;
            echo "<br>";
            echo "El numero de suspensos es " . $suspensos;
        ?>
            
    </body>
</html>