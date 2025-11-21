<?php 

        //Arrays asociativos
        echo "<h2>Arrays asociativos:</h2>";
        // Un array asociativo es un array donde las claves son cadenas en lugar de números.

        $car = array( //es lo mismo hacer el array con: array() o con []
            "brand"=>"Ford", 
            "model"=>"Mustang", 
            "year"=>1964
        );
        var_dump($car);
        echo "<br>".$car["model"]; // Outputs "Mustang"

        //For each loop (para los arrays asociativos)
        echo "<h3>For each loop:</h3>";

        $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach ($members as $x => $y) {
        echo "$x : $y <br>";
        }

        //Para filtrar valores en un array asociativo con un foreach
        foreach($members as $etiqueta => $valor){
            if($etiqueta == "Ben" or $etiqueta == "Joe"){
                echo "El es ".$etiqueta." y su edad es ".$valor."<br>";
            }
        } 




    echo "<h2>5.- Arrays asociativos</h2> ";
    // Crear un array que contemple Nombre, Apellidos, Módulos con sus notas: Calcular la media de las notas y <Nombre><Apellidos> tiene na de media <media>.

    $alumno = array(
        "Nombre"=>"Salvador", 
        "Apellidos"=>"Marcos Arias", 
        "PHP"=>8,
        "BDD"=>4,
        "IMWEB"=>6,
    );

    echo "Notas: ".$alumno["PHP"].", ".$alumno["BDD"].", ".$alumno["IMWEB"].".<br>";

    $media = ($alumno["PHP"] + $alumno["BDD"] + $alumno["IMWEB"])/3;

    echo $alumno["Nombre"]." ".$alumno["Apellidos"]." tiene de media un ".$media."<br><br>";
     
    foreach ($alumno as $claves => $valor) {
        echo "$claves : $valor <br>";
    }
    echo "<br>";

    foreach($alumno as $key => $value){
        if($key == "PHP" or $key == "BDD" or $key == "IMWEB"){
            echo "La nota de ".$key." es ".$value."<br>";
        }
    }
    echo "<br>";

    foreach($alumno as $key => $value){
        if($value >= 5){
           echo "Mi  nota de ".$key." es ".$value." y está aprobada.<br>";
        }
        else {
           echo "Mi nota de ".$key." es ".$value." y está suspensa.<br>";
        }
    }
    echo "<br>";
