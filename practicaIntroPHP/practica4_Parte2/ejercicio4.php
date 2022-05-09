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
    if (!isset($_POST['submit'])) {
    ?>

<?php
    function comprobar_nombre_usuario($nombre_usuario){
        //compruebo que el tamaño del string sea válido.
        if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }


        //compruebo que los caracteres sean los permitidos
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
        for ($i=0; $i<strlen($nombre_usuario); $i++){
            if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
                echo $nombre_usuario . " no es válido<br>";
                return false;
            }else{
                echo $nombre_usuario . " es válido<br>";
                return true;
            }
        }
    }
    
  ?>

  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Ingresar tu nombre</label>
        Nombre: <input name="nombre" size="5">
        <input type="submit" name="Validar Usuario">
  </form>

  <?php 
  
    if(empty($_POST["nombre"]))
    {
        echo "";
    }else{
    echo comprobar_nombre_usuario($_POST["nombre"]);
    }
}
  ?>
</body>
</html>
