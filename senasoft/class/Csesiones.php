<?php
   
    class Csesiones
    {
        public static function iniciar_sesion()
        {
            if( !isset( $_SESSION ) ) session_start();
        } 

        public static function verificar_sesion()
        {
            self::iniciar_sesion();

            if( isset( $_SESSION[ 'correo' ] ) )
            {
                if( TRIM( $_SESSION[ 'correo' ] ) == "" )
                {
                    header( "location: ../controladores/c-iniciar_seccion.php " );
                }

            }else{
                    header( "location: ../controladores/c-iniciar_seccion.php" );
                }
        }
    }