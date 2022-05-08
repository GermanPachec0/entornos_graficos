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
    echo "<table width = 90% border = '1' >";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
    for ($c = 1; $c <= $col;$c++) {
        echo "<td>&nbsp;</td>\n";
    } 
    echo "</tr>\n";
    }
    echo "</table>\n";

    //Lo que hace el código, es una tabla con 2 columnas y 5 filas
    ?>
<?php
    if (!isset($_POST['submit'])) {
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     Edad: <input name="age" size="2">
     <input type="submit" name="submit" value="Ir">
 </form>
<?php
    }
else {
$age = $_POST['age'];
 if ($age >= 21) {
    echo 'Mayor de edad';
 }
 else{
    echo 'Menor de edad';
 }

}
// Lo que realiza el codigo es verificar sí el POST["submit"] no haya sido seteado, en el caso de que no fue seteado, te permite rellenar el formulario con la edad, luego rescata del POST["age"] el valor del mismo con la varibable $a,
// y muestra dependiendo la condición, la edad de la persona. y Sí el $post["submit"] ya fue enviado, no deja refrescar la página para que vuelva a aparecer el formulario. dado que el valor ya está seteado.
?>


</body>
</html>