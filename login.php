<?php
include 'registrar.php';
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "jose";

$conexion = mysqli_connect($servidor,$usuario,"", $basededatos);
/* 
if($conexion){
echo"Fue conectado exitosamente";
}else{
 echo"No fue posible conectar a la base de datos";

} */
?>