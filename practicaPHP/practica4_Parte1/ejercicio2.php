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
//A.
echo "A.<br>";
    $i = 1;
    while ($i <= 10) {
         print $i++;
    }

    echo "<br>";
    $i = 1;
    while ($i <= 10):
        print $i;
        $i++;
    endwhile; 

    echo "<br>";
    $i = 0;
    do {
        print ++$i;
    } while ($i<10);
    echo "<br><br>";
    
    
    // Los códigos que se muestran, son equivalentes.

//B.
    echo"B.<br>";
    for ($i = 1; $i <= 10; $i++) {
        print $i;
    }
    echo "<br>";

    for ($i = 1; $i <= 10; print $i, $i++) ;
    echo "<br>";
    for ($i = 1; ;$i++) {
        if ($i > 10) {
             break;
         }
        print $i;
    }
    echo "<br>";
    $i = 1;
    for (;;) {
        if ($i > 10) {
             break;
    }
         print $i;
         $i++;
    }
    echo "<br><br>";

    // Estas 4 formas de escribir el código, son equivalentes.
    echo"C.<br>";

    $i = 2;
    if ($i == 0){
        print "i equals 0";
    } elseif ($i == 1){
        print "i equals 1";
    } elseif ($i == 2){
        print "i equals 2";
    }
    echo "<br>";
    
    switch ($i) {
        case 0:
            print "i equals 0";
        break;
        case 1:
            print "i equals 1";
        break;
        case 2:
            print "i equals 2";
        break;
    }


    ?>
</body>
</html>