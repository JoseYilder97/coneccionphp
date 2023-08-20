<?php
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "password";

$conexion = mysqli_connect($servidor,$usuario,"", $basededatos) or die ("Error con el servidor de la base de datos");
$bd = mysqli_select_db($conexion, $basededatos) or die ("Error de conexion al conectarse a la base de datos");
$correo=$_POST['correo']; 
$contrasena=$_POST['contrasena'];

$sql="INSERT INTO pass VALUES ('$correo','$contrasena')";

$ejecutar=mysqli_query($conexion, $sql);

if(!$ejecutar){
echo"Hubo un error";
}else{
 echo"Datos guardados satisfactoriamente... ", "<a href='inicio.php'>Volver</a>";

}
?>

