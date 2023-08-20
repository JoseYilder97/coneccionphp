<?php
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "jose";

$conexion = mysqli_connect($servidor,$usuario,"", $basededatos) or die ("Error con el servidor de la base de datos");
$bd = mysqli_select_db($conexion, $basededatos) or die ("Error de conexion al conectarse a la base de datos");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$correo=$_POST['correo']; 
$curso=$_POST['curso'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO usuarios VALUES ('$id','$nombre','$apellido','$edad','$correo','$curso','$telefono')";

$ejecutar=mysqli_query($conexion, $sql);

if(!$ejecutar){
echo"Hubo un error";
}else{
 echo"Datos guardados satisfactoriamente... ", "<a href='inicio.php'>Volver</a>";

}
?>










