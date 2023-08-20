<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;500;700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Quicksand:wght@300;500;700&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,400;1,900&display=swap" rel="stylesheet">

  <title>Este es un  login</title>
</head>

<body>

<div class="container">
<h1 class="container_title">REGISTRATE</h1>
  <h3 class="sub_title">Favor diligenciar todos los campos</h3>
  <div class="form">
  <form action="guardar.php" method="POST">
    <input type="text" placeholder="id:" maxlength="2" required name="id">

    <input type="text" placeholder="nombre:" maxlength="50" required name="nombre">

    <input type="text" placeholder="apellido:" maxlength="50" required name="apellido">

    <input type="text" placeholder="edad:" maxlength="4" required name="edad">

    <input type="text" placeholder="correo:" maxlength="100" required name="correo">

    <input type="text" placeholder="curso:" maxlength="4" required name="curso">
 
    <input type="text" placeholder="telefono:" maxlength="12" required name="telefono">

    <input type="submit" class="button" value="Enviar">

    <input type="reset"  class="button"value="Cancelar">
    <a href='login.php'>Login</a>
    <a href='inicio.php'>Registrate</a>
  </form>
 

</div>
  </div>

</body>

</html>