<?php
session_start();

if (isset($_SESSION['userid'])) {
    header('Location: /php-login');
}
require 'database.php';

$message = '';

if (!empty($_POST['correo']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users ( correo, password) VALUES (:correo,:password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':correo', $_POST['correo']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Usuario creado satisfactoriamente';
    } else {
        $message = 'Lo siento, debe haber un problema al crear tu cuenta';
    }
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'header.php'  ?>
    <?php if (!empty($message)) : ?>
        <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>LOGIN</h1>
    <span>o <a href="registro.php">Login</a></span>
    <form action="login.php" method="POST">
        <input name="correo" type="text" placeholder="Ingrese su correo">
        <input name="password" type="password" placeholder="Ingrese su password">
        <input name="confirm_password" type="password" placeholder="confirme su password">
        <input name="submit" value="Enviar">
    </form>
</body>

</html>