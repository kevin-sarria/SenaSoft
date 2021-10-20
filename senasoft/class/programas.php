<?php
//*editor david sanchez 
//*fecha de edición 5/10/2021
//incluiumos la conección
include ('conexion.php');

class insertar_programa extends Conex
{

    static function insertar ($ficha, $n_programa,$cantidad_aprendizes,$n_nivel)
        {
            
            $conexion = Conex::conectar();
            //porfavor no tocar esta linea de codigo esta inserta la imformación suministrada a la base de datos
            $sql= " insert into programas (ficha, n_programa,cantidad_aprendizes,id_nivel) values ('$ficha', '$n_programa','$cantidad_aprendizes','$n_nivel')";
            $resultado = $conexion->query($sql);
            echo $sql;
            if ($conexion ->affected_rows > 0)
            {
                //este da un mensaje de alerta
                echo '<script language="javascript">alert("tus datos se guardaron");window.location.href="../vistas/agregar_programa.php";</script>';
            }
            else
            {   //este da un mensaje de alerta
                echo '<script language="javascript">alert("tus datos no se guardaron");window.location.href="../vistas/agregar_programa.php";</script>';
                
                
            }
        }
}