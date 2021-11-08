<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include('conexion.php');

$CU=$_POST ['cuo'];
$nombre=$_POST ['nom'];
$apellido=$_POST ['ape'];
$fecha=$_POST ['fec'];
$direccio=$_POST ['dire'];
$nombrep=$_POST ['np'];
$nombrem=$_POST ['nm'];
$correo=$_POST ['corr'];

$consulta="INSERT INTO ingreso(CU,Nombre, Apellido,Fecha,Direccion,NombreP,NombreM, Correo)
VALUES ('$CU', '$nombre', '$apellido', '$fecha', '$direccio','$nombrep','$nombrem','$correo')";

$resultado=mysqli_query($conexion, $consulta) or die ("No se puedo ingresar");



mysqli_close($conexion);
header("Location:index.html");
exit;
}
?>