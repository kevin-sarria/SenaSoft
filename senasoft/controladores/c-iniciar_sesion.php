<?php
include( "../class/Csesiones.php" );
Csesiones::iniciar_sesion();
$_SESSION[ 'correo' ] = "";
$seccion = "../vistas/index.php";




//include("../vistas/v-plantilla.php");