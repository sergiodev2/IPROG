<html>
    <body>
        <?php
        /* $aprobados -> el nª de notas "aprobados" -> 5 */
        /* $suspensos -> el nª de notas "suspensos" -> 4 */
            $aprobados = 0;
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
            echo "El numero de suspensos es " . $suspensos;

            
        ?>
    </body>
</html>