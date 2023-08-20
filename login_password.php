
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;500;700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Quicksand:wght@300;500;700&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,400;1,900&display=swap" rel="stylesheet">

  <title>Este es un  login</title>
</head>

<body>


<div class="container">
<h1 class="container_title">Iniciar sesión</h1>
  <div class="form">
  <form action="password" method="POST">
    <input type="text" placeholder="correo:" maxlength="100" required name="correo">

    <input type="password" placeholder="contraseña:" maxlength="100" required name="contrasena">
    <input type="submit" class="button" value="Login">
    <a href='loggin.php'>Regresar</a>
    <a href='registrar.php'>Crea tu Cuenta</a>
    
</div>

</body>

</html>
