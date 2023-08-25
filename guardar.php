<?php
include_once 'conexionsql.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$correo=$_POST['correo']; 
$curso=$_POST['curso'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO usuarios /* (id, nombre, apellido, edad, correo, curso, telefono) esto es*/
VALUES ('$id,'$nombre','$apellido','$edad','$correo','$curso','$telefono')";

$ejecutar=mysqli_query($conexion, $sql);

if(!$ejecutar){
echo"Hubo un error";
}else{
 echo"Datoas guardados satisfactoriamente... ", "<a href='inicio.php'>Volver</a>";

}
?>










