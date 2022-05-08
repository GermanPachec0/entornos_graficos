<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 
    //EJERCICIO 1 

    function doble($i) 
    {
        return $i*2; // Variable i de tipo INTEGER y operador armitmetico *.
    }
     
    $a = TRUE;  // Variable a de tipo boolean
    $b = "xyz"; //Variable b de tipo String
    $c = 'xyz';// Variable c de tipo String.
    $d = 12;    // Variable d de tipo integer

    echo gettype($a);  //Funcion Gettype con parametro $a devuelve tipo de dato de la varible. en este caso, Boolean
    echo "<br>";
    echo gettype($b); // Funcion Gettype, devuleve el tipo de variable en este caso muestra String.
    echo "<br>";
    echo gettype($c); // Función gettype, devuleve el tipo de variable en este caso muestra String.
    echo "<br>";
    echo gettype($d); // Función gettype, devuleve el tipo de variable en este caso muestra Integer.
    echo "<br>";

    if (is_int($d)) { // Estructura de control if con función is_int que devuelve true si el parametro d es un entero. 
        $d += 4;   // variable d que aumenta en 4 en caso de que is_int sea true.
    }
    if (is_string($a)) { // Estructura de control if con la función is_string que devuelve true en el caso de que la variable "a" sea un string.
         echo "Cadena: $a";  // En este caso no se mostrará nada por pantalla dado que la variable a es boolean.
         echo "<br>";
    }

    $d = $a ? ++$d : $d*3; // Estructura de control if else escrita de forma acotada.
                         // variable $d de tipo integer, y $a de tipo boolean. Operador de incremento ++ y operador aritmetico *.
    $f = doble($d++); //Variable $f de tipo integer, que recibe el valor que devuelve la funcion doble($d++) y luego hay un operador de incremento que aumenta el valor de $d en 1 cuando pasa por la función.
    $g = $f += 10; //Variable $g de tipo integer que recibe el valor que tenía la variable $f + 10, += es un operador de incremento el cual es lo mismo que utilizar $f= $f+10.

    echo $a, $b, $c, $d, $f , $g; // variables a,b,c,d,f,g  de las cuales su salidas por pantalla son: 
                     // $a es 1 (BOOLEAN), $b es xyz (STRING), $c es xyz (STRING), $d es 18 (STRING),  $f es 44 (STRING), $g es 44.
?> 

</body>
</html>