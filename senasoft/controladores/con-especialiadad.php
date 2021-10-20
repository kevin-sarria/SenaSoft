<?php

include ('../class/conexion.php');
$conexion = Conex::conectar();
$consulta='SELECT * from especialidad';
$consulta2=mysqli_query($conexion,$consulta); 
