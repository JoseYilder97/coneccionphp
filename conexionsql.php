
<!-- Aca ingreso la primere conexion con base de datos y agregamos la primera pagina de inicio para conectar a este base de datis  -->
<?php
include_once 'index.php';
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "jose";

$conexion = mysqli_connect($servidor,$usuario,"", $basededatos);

/* if($conexion){
echo"Fue conectado exitosamente";
}else{
 echo"No fue posible conectar a la base de datos";
 

} 
 */
?>