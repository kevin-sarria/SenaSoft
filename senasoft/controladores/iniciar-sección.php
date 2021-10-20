<?php

    include( "../class/consulta.php" );
    include( "../class/Csesiones.php" );
    include( "../class/Vimprimir.php" );
    Csesiones::iniciar_sesion();

    $correo = $_POST[ 'correo' ];
    $contraseña = $_POST[ 'contraseña' ];


    $r = consulta::autenticacion( $correo, $contraseña );

 
    
    if (($r->num_rows) == 1)
    {
        $_SESSION[ 'correo' ] = $r->fetch_all()[0][0];
        header( "location: ../index.php" );
        
      
    }
    else{
       
        header( "location: ../controladores/c-iniciar_sesion.php" );







    }

    $files= $r->fetch_all(MYSQLI_ASSOC);
    
     die();

    
   