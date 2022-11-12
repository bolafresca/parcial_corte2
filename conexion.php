<?php

function conec(){
$hostname ="localhost";
$usuariobd ="root";
$passworddb ="";
$dbname ="persona";

$conectar = mysqli_connect($hostname,$usuariobd,$passworddb,$dbname);
return $conectar;

}

?>


