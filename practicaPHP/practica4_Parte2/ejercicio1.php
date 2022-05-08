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
    $a = array( 'color' => 'rojo',
        'sabor' => 'dulce',
        'forma' => 'redonda',
        'nombre' => 'manzana',
        4
    );


    
    foreach($a as $value)
    {
        print $value ."<br>";
    }
?> 
<?php
    $a['color'] = 'rojo';
    $a['sabor'] = 'dulce';
    $a['forma'] = 'redonda';
    $a['nombre'] = 'manzana';
    array_push($a,4);
    echo $a[4];
    // El codigo que se muestra no son equivalentes, dado que en nuestro segundo script, al asignar el valor 4 a una posición vacia, no se sabe en que posición estamos agregando dicho número.
    
?> 


</body>
</html>