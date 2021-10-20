<?php
//*editor david sanchez 
//*fecha de edición 5/10/2021
//incluimos el archivo programas.php
include("../class/especialidad.php");
//llamamos los datos los cuales van a ser insertados 
 $n_espe = $_POST['especialidad'];

//hacemos un condicional para provar su información 

if ($n_espe == true)
{
  
    insertar_ESPECIALIDAD::insertar($n_espe);
    
   
    
}
else{
   
   //header( "location: c-menu-programa.php" );
   echo "le falta informacion";
}