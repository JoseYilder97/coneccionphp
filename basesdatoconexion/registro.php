<?php
session_start();

require 'database.php';

if (isset($_SESSION['userid'])) {
    header('Location: /registro_usuarios');
}
if (!empty($_POST['correo']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, correo, password FROM users WHERE correo = :correo');
    $records->bindParam(':correo', $_POST['correo']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = "";

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['userid'] = $results['id'];
        header('Location: /registro_usuarios');
    } else {
        $message = 'Lo siento, los datos utilizados no coinciden';
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
    <?php require 'header.php' ?>
    <?php if (!empty($message)) : ?>
        <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span> o <a href="login.php">Registro</a></span>
    <form action="registro.php" method="POST">
        <input name="correo" type="text" placeholder="Ingrese su correo">
        <input name="password" type="password" placeholder="Ingrese su password">
        <input type="submit" value="Enviar>" </form>
</body>

</html>