<?php
//*editor david sanchez 
//*fecha de edición 5/10/2021
//incluimos el archivo programas.php
include("../class/programas.php");
//llamamos los datos los cuales van a ser insertados 
 $ficha = $_POST[ 'ficha' ];
 $n_programa = $_POST[ 'nombre' ];
 $cantidad_aprendizes = $_POST[ 'cantidad' ];
 $id_nivel = $_POST['nivel'];

//hacemos un condicional para provar su información 

if ($ficha == true && $n_programa== true && $cantidad_aprendizes== true && $id_nivel== true )
{
  
    insertar_programa::insertar($ficha, $n_programa,$cantidad_aprendizes,$id_nivel);
    
   
    
}
else{
   
   //header( "location: c-menu-programa.php" );
   echo "le falta informacion";
}