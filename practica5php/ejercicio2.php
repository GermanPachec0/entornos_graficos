<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<form action="enviarCorreoConsulta.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="comment">Consulta</label>
      <textarea class="form-control" rows="4" cols="3" id="comment" name="consulta"></textarea>
    </div>
    <div>
        <input name="nuevoEmail" size= "50" type="email">
        <br>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar Consulta</button>
  </form>
</body>
</html>