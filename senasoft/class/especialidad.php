<?php
//*editor david sanchez 
//*fecha de edición 5/10/2021
//incluiumos la conección
include ('conexion.php');

class insertar_ESPECIALIDAD extends Conex
{

    static function insertar ($n_espe)
        {
            
            $conexion = Conex::conectar();
            //porfavor no tocar esta linea de codigo esta inserta la imformación suministrada a la base de datos
            $sql= "INSERT INTO `especialidad` (`id_esp`, `n_espe`) VALUES (NULL, '$n_espe')";
            $resultado = $conexion->query($sql);
            echo $sql;
            if ($conexion ->affected_rows > 0)
            {
                //este da un mensaje de alerta
                echo '<script language="javascript">alert("tus datos se guardaron");window.location.href="../vista/Re-especialidad.php";</script>';
            }
            else
            {   //este da un mensaje de alerta
                echo '<script language="javascript">alert("tus datos no se guardaron");window.location.href="../vista/Re-especialidad.php";</script>';
                
                
            }
        }
}