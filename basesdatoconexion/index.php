<?php
session_start();

require 'database.php';

if (isset($_SESSION['userid'])) {
    $records = $conn->prepare('SELECT id, correo, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['userid']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sistema de Registro de usuarios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'header.php'  ?>
    <?php if (!empty($user)) : ?>
        <br>Bienvenido. <?= $user['correo']; ?>
        <br>Ha ingresado satisfactoriamente
        <a href="salir.php">
            Cerrar sesión
        </a>
    <?php else : ?>
        <h1> Por favor loguearse o registrarse aqui</h1>
        <a href="login.php">Login</a> o <a href="registro.php">Registro</a>
    <?php endif; ?>
</body>

</html>