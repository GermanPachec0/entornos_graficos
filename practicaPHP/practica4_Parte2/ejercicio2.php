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
//A
    $matriz = array("x" => "bar", 12 => true);
    echo $matriz["x"]; // Salida "Bar"
    echo $matriz[12];   // Salida 1

?>
<?php
//B
    $matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
    echo $matriz["unamatriz"][6]; // Salida 5.
    echo $matriz["unamatriz"][13];  // Salida 9.
    echo $matriz["unamatriz"]["a"]; //salida 49.
    echo "<br>";
?>
<?php //C
$matriz = array(5 => 1, 12 => 2);
    $matriz[] = 56; // Salida 56.
    echo $matriz["x"] = 42; // Salida: 42.
    unset($matriz[5]); //Quita de la posición 5 del array el valor que tiene guardado.
    unset($matriz); // quita todos los valores de la matriz.
?> 

</body>
</html>