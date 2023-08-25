
<!-- Aca ingreso las  base de datos y la contraseña desifrado de la pagina de incio de seccion  -->
<?php
include_once 'conexionsql.php';


$correo=$_POST['correo']; 
$contrasena=$_POST['contrasena'];

$sql="INSERT INTO usuarios VALUES ('$correo','$contasena',)";

$ejecutar=mysqli_query($conexion, $sql);

?>