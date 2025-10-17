<html>
    <body>
        <?php
        /*1- Crea un programa que recorra del 1 al 30 e imprima:
"Fizz" si el número es múltiplo de 3,
"Buzz" si es múltiplo de 5,
"FizzBuzz" si es múltiplo de ambos,
o el número en caso contrario. */
        for ($i = 1; $i <= 30; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz";
            } elseif ($i % 3 == 0) {
                echo "Fizz";
            } elseif ($i % 5 == 0) {
                echo "Buzz";
            } else {
                echo $i;
            }
            echo "<br>";
        }
        
        ?>
    </body>
</html>