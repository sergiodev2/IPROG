<html>
    <body>
        <?php
        /*# 1- Crea un programa que recorra del 1 al 30 e imprima: "Fizz" si el número es múltiplo de 3, "Buzz" si es múltiplo de 5, "FizzBuzz" si es múltiplo de ambos,o el número en caso contrario.
        
        echo "<h3>Ejercicio 1: <br></h3>";
        for ($i = 1; $i <= 30; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo $i . " FizzBuzz <br>";
            } elseif ($i % 3 == 0) {
                echo $i . " Fizz <br>";
            } elseif ($i % 5 == 0) {
                echo $i . " Buzz <br>";
            } else {
                echo $i . "<br>";
            }
        }

        # 2- Escribe un programa que aconseje con un mensaje por pantalla la necesidad de llevar paraguas en función del tiempo. $a tomará los valores: 0 si no llueve y 1 si sí llueve. $b tomara los valores: 0 si no hace viento y 1 si hace viento los valores se les tiene que dar el usuario.
        
        echo "<h3>Ejercicio 2: <br></h3>";
        $a = 1;
        $b = 0;
        if ($a == 1) {
            if ($b == 1) {
                echo "Lleva paraguas y una chaqueta resistente al viento.<br>";
            } else {
                echo "Lleva paraguas.<br>";
            }
        } else {
            if ($b == 1) {
                echo "No necesitas paraguas, pero lleva una chaqueta ligera.<br>";
            } else {
                echo "No necesitas paraguas ni chaqueta.<br>";
            }
        }
        # 3
        echo "<h3>Ejercicio 3: <br></h3>";
        $a = 0;
        $b = 1;
        $c = 40;
        if ($c > 37 && $a == 0 && $b == 0) {
            echo "La temperatura es mayor a 37ºC y no llueve, ni hace viento, deberán tambien sacar un paraguas.<br>";
        } else
            if ($a == 1) {
                if ($b == 1) {
                    echo "Lleva paraguas y una chaqueta resistente al viento.<br>";
                } else {
                    echo "Lleva paraguas.<br>";
                }
            } else {
                if ($b == 1) {
                    echo "No necesitas paraguas, pero lleva una chaqueta ligera.<br>";
                } else {
                    echo "No necesitas paraguas ni chaqueta.<br>";
                }
            }
        # 4
        echo "<h3>Ejercicio 4: <br></h3>";
        
        $numero1 = readline("Por favor, ingresa un número: ");
        $numero2 = readline("Por favor, ingresa un segundo número: ");
        $numero3 = readline("Por favor, ingresa un tercer número: ");
        if ($numero1 > 100 || $numero2 > 100 || $numero3 > 100) {
            echo "Al menos uno de los números es mayor que 100.<br>";
        } else {
            echo "Ninguno de los números es mayor que 100.<br>";
        }

        # 4B Investigacion que hice por internet
        echo "<h3>Ejercicio 4B: <br></h3>";
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $numero1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
            $numero2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;
            $numero3 = isset($_POST['numero3']) ? floatval($_POST['numero3']) : 0;

            if ($numero1 > 100 || $numero2 > 100 || $numero3 > 100) {
                echo "Al menos uno de los números es mayor que 100.<br>";
            } else {
                echo "Ninguno de los números es mayor que 100.<br>";
            }
        } else {
            echo '<form method="post">
                    Número 1: <input type="number" name="numero1" step="any" required><br>
                    Número 2: <input type="number" name="numero2" step="any" required><br>
                    Número 3: <input type="number" name="numero3" step="any" required><br>
                    <button type="submit">Comprobar</button>
                    </form>'; }
        # 5
        echo "<h3>Ejercicio 5: <br></h3>";
        $numero = readline("Por favor, ingresa un número: ");
        while ($nummero > 0)
        {
            echo $numero . "<br>";
            $numero = $numero - 1;
        } 
        # 6
        $numeroazar = rand(1, 10);
        $numerouser = 0;
        $intentos = 0;
        while ($numerouser != $numeroazar){
            $numerouser = readline("Introduzca numero: ");
            $intentos++;
        }
        echo "Enhorabuena, lo has acertado en el intento numero " . $intentos;
        


        #7
        $numero = readline("Introduce un número: ");
        $contadorDivisores = 0;
        if ($numero > 1) {
            for ($i = 1; $i <= $numero; $i++) {
                if ($numero % $i == 0) {
                    $contadorDivisores++;
                }
            }
            if ($contadorDivisores == 2) {
                echo "Es primo\n";
            } else {
                echo "No es primo\n";
            }
        } else {
            echo "No es primo\n";
        }
        */
        #8
        $numcal = 1;
        $num1 = 0;
        $num2 = 0;
        $resultado = 0;
        while ($numcal != 0){
            echo "Que operación quieres hacer";
            $numcal = readline("1. Suma | 2. Resta | 3. Multiplicación | 4. Divisón | 0. Salir: ");
                if ($numcal == 1){
                    $num1 = readline("Introduzca los datos del numero 1: ");
                    $num2 = readline("Introduzca los datos del numero 2: ");
                    $resultado = $num1 + $num2;
                    echo "El resultado es " .$resultado. "\n";
                }elseif($numcal == 2){
                    $num1 = readline("Introduzca los datos del numero 1: ");
                    $num2 = readline("Introduzca los datos del numero 2: ");
                    $resultado = $num1 - $num2;
                    echo "El resultado es " .$resultado. "\n";
                }elseif($numcal == 3){
                    $num1 = readline("Introduzca los datos del numero 1: ");
                    $num2 = readline("Introduzca los datos del numero 2: ");
                    $resultado = $num1 * $num2;
                    echo "El resultado es " .$resultado. "\n";
                }elseif ($numcal == 4){
                    $num1 = readline("Introduzca los datos del numero 1: ");
                    $num2 = readline("Introduzca los datos del numero 2: ");
                    $resultado = $num1 / $num2;
                    echo "El resultado es " .$resultado. "\n";
                }elseif ($numcal == 0){
                    echo "Salir";
                }
                break;
        }
                            


            
        ?>
    </body>
</html>