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
//B
    $fun = getdate();
    echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
    segundos, del $fun[mday]/$fun[mon]/$fun[year]";

    // Muestra hora, minutos, segundos y  día, mes y año.
?>
<?php
    echo "<br>";
    function sumar($sumando1,$sumando2){
        $suma=$sumando1+$sumando2;
        echo $sumando1."+".$sumando2."=".$suma; // Muestra 5 + 6 = 11
    }
    sumar(5,6);
?>
</body>
</html>