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
            $notas = array(5,3,2,7,10,9,8,2,4);
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

            
        ?>
    </body>
</html>