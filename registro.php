<?php 
include_once('conexion.php');

$nombre =$_POST['nombres'];
$documento =$_POST['documento'];


$conectar=conec();
$sql="INSERT INTO datos (nombre, documento) VALUES ('$nombre', '$documento')";  

?>
<!-- INSERT INTO datos (nombre, documento, fechaNacimiiento, departamento, ciudad, sexo, estadoCivil, tieneTrabajo, nombreEmpresa, Sueldo, hijos,estrato) 
VALUES ('jorge', '546879', '2022-11-16', 'HUILA', 'LA PLATA', 'Masculino', 'Soltero', 'No', NULL, '36555', '2', '6'); -->