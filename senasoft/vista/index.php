<?php /*include("../controladores/iniciar-sección.php")
*/?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo_login.css">
    <title>Iniciar sesion</title>
</head>

<body>

    <section id="contenedor_login_blanco">
        <div id="contenedor_inputs_login">
            <form action="../controladores/iniciar-sección.php" method="POST">
                <img src="../img/SenaSoft.png" id="logo_senasoft">
                <label class="label_input_login">Correo</label><br>
                <input type="email" name="correo" class="input_iniciar_sesion" require>
                <br>
                <label class="label_input_login">Contraseña</label><br>
                <input type="password" name="contraseña" class="input_iniciar_sesion" require>
                <br>
                <a href="../controladores/c-recuperar.php" id="link_olvide_contrasena">¿Olvidaste tu contraseña?</a>
                <br><br><br>
                <input type="submit" value="Iniciar sesion" id="boton_iniciar_sesion">
                <br>
            </form>
    </section>
    </div>


</body>

</html>