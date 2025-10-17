<html>
    <body>
        <?php
        /* Array ejercicio 1 --> Calcular la media
        -> Si la media es < 5 
            $calificacion contendra "SUSPENSO" 
        -> Si la media es 5 O 6
            $calificacion contendra "APROBADO" *
        -> Si la media es 7 O 8
            $calificacion contendra "NOTABLE" 
        -> Si la media es 9 O 10 
            $calificacion contendra "SOBRESALIENTE"    */
        /*    $notas = array(5,3,2,7,10,9,8,2,4);
            $media = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4] + $notas[5] + $notas[6] + $notas[7] + $notas[8]) / 9;
            echo "La media es " . $media;
            $calificacion = "";
            if ($media < 5) {
                $calificacion = "SUSPENSO"; }
            elseif ($media >= 5 && $media < 6) {
                $calificacion = "APROBADO"; }
            elseif ($media >= 7 && $media < 9) {
                $calificacion = "NOTABLE"; }
            elseif ($media > 9 && $media <= 10) {
                $calificacion = "SOBRESALIENTE"; }
            echo "<br>";
            echo "La calificacion es " . $calificacion;
            */
        echo "Otra forma de hacerlo con case";
        echo "<br>";
        $notas = array(5,3,2,7,10,9,8,2,4);
        $media = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4] + $notas[5] + $notas[6] + $notas[7] + $notas[8]) / 9;
        echo "La media es " . $media;
        $calificacion = "";
        switch (true) {
            case ($media < 5):
                $calificacion = "SUSPENSO";
                break;
            case ($media >= 5 && $media < 6):
                $calificacion = "APROBADO";
                break;
            case ($media >= 7 && $media < 9):
                $calificacion = "NOTABLE";
                break;
            case ($media > 9 && $media <= 10):
                $calificacion = "SOBRESALIENTE";
                break;
        }
        echo "<br>";
        echo "La calificacion es " . $calificacion;
        echo "<br>";

        # con for 

        echo "<br>";
        echo "Ejercicio 3 con for ";
        echo "<br>";
        $notas = array(5,3,2,7,10,9,8,2,4);
        $suma = 0;
        for ($i = 0; $i < count($notas); $i++)
        {
            $suma += $notas[$i];
        }
        $media = $suma / count($notas);
        echo "La media es " . $media;
        $calificacion = "";
        if ($media < 5) {
            $calificacion = "SUSPENSO"; }
        elseif ($media >= 5 && $media < 6) {
            $calificacion = "APROBADO"; }
        elseif ($media >= 7 && $media < 9) {
            $calificacion = "NOTABLE"; }
        elseif ($media > 9 && $media <= 10) {
            $calificacion = "SOBRESALIENTE"; }
        echo "<br>";
        echo "La calificacion es " . $calificacion;
        # con foreach
        echo "<br>";
        echo "Ejercicio 3 con foreach ";
        echo "<br>";
        $notas = array(5,3,2,7,10,9,8,2,4);
        $suma = 0;
        foreach ($notas as $nota) {
            $suma += $nota;
        }
        $media = $suma / count($notas);
        echo "La media es " . $media;   
        $calificacion = "";
        if ($media < 5) {
            $calificacion = "SUSPENSO"; }
        elseif ($media >= 5 && $media < 6) {
            $calificacion = "APROBADO"; }
        elseif ($media >= 7 && $media < 9) {
            $calificacion = "NOTABLE"; }
        elseif ($media > 9 && $media <= 10) {
            $calificacion = "SOBRESALIENTE"; }
        echo "<br>";
        echo "La calificacion es " . $calificacion;
        # con while
        echo "<br>";
        echo "Ejercicio 3 con while ";
        echo "<br>";
        $notas = array(5,3,2,7,10,9,8,2,4);
        $suma = 0;
        $i = 0;
        while ($i < count($notas)) {
            $suma += $notas[$i];
            $i++;
        }
        $media = $suma / count($notas);
        echo "La media es " . $media;
        $calificacion = "";
        if ($media < 5) {
            $calificacion = "SUSPENSO"; }
        elseif ($media >= 5 && $media < 6) {
            $calificacion = "APROBADO"; }
        elseif ($media >= 7 && $media < 9) {
            $calificacion = "NOTABLE"; }
        elseif ($media > 9 && $media <= 10) {
            $calificacion = "SOBRESALIENTE"; }
        echo "<br>";
        echo "La calificacion es " . $calificacion;
        # con do while
        echo "<br>";
        echo "Ejercicio 3 con do while ";
        echo "<br>";
        $notas = array(5,3,2,7,10,9,8,2,4);
        $suma = 0;
        $i = 0;
        do {
            $suma += $notas[$i];
            $i++;
        } while ($i < count($notas));
        $media = $suma / count($notas);
        echo "La media es " . $media;
        $calificacion = "";
        if ($media < 5) {
            $calificacion = "SUSPENSO"; }
        elseif ($media >= 5 && $media < 6) {
            $calificacion = "APROBADO"; }
        elseif ($media >= 7 && $media < 9) {
            $calificacion = "NOTABLE"; }
        elseif ($media > 9 && $media <= 10) {
            $calificacion = "SOBRESALIENTE"; }
        echo "<br>";
        echo "La calificacion es " . $calificacion;





        
        
        ?>
    </body>
</html>


