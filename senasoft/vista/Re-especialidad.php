<!DOCTYPE html>

<!--iniciamos la vista de agregar programas
*editor david sanchez 
*fecha de edición 5/10/2021-->
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingresar especialidad</title>
  <link rel="stylesheet" href="../css/historial.css">
</head>

<body>
  <div class="nav_bar">
    
      <img src="../img/logo_senasoft_prueba_eps.png" id="logo_inicio">

      <label id="texto_logo">Prueba EPS</label>



    <div id="nav_bar_links">
      <a href="index.php"><svg class="svg-icon" viewBox="0 0 20 20">
          <path fill="none" d="M13.53,2.238c-0.389-0.164-0.844,0.017-1.01,0.41c-0.166,0.391,0.018,0.845,0.411,1.01
								c2.792,1.181,4.598,3.904,4.6,6.937c0,4.152-3.378,7.529-7.53,7.529c-4.151,0-7.529-3.377-7.529-7.529
								C2.469,7.591,4.251,4.878,7.01,3.683C7.401,3.515,7.58,3.06,7.412,2.67c-0.17-0.392-0.624-0.571-1.014-0.402
								c-3.325,1.44-5.472,4.708-5.47,8.327c0,5.002,4.069,9.071,9.071,9.071c5.003,0,9.073-4.07,9.073-9.071
								C19.07,6.939,16.895,3.659,13.53,2.238z"></path>
          <path fill="none" d="M9.999,7.616c0.426,0,0.771-0.345,0.771-0.771v-5.74c0-0.426-0.345-0.771-0.771-0.771
								c-0.427,0-0.771,0.345-0.771,0.771v5.74C9.228,7.271,9.573,7.616,9.999,7.616z"></path>
        </svg></a>
      <a href="Re-especialidad.php"><b>Registrar especialidad</b></a>
      <a href=""><b>Registrar personal</b></a>
      <a href=""><b>Gestionar personal</b></a>
      <a href=""><b>inicio</b></a>
    </div>


  </div>
  <div id=centrar>
    <!--  -->



  </div>

  <!--comensamos con la creación de un formulario-->

  <fieldset class="contenedores_fieldsets_informacion">
    <form action="../controladores/c-Re-especialidad.php" method="POST" id="form">


      <h2 class="titulo_registrar_especialidad">Registrar especialidad</h2>

      <?php  //creamos la coneccion con la bases de datos 
        //$mysqli = new mysqli('localhost', 'root', '', 'senasoft');
      ;
      ?>
      <!--comensamos a crear el cuerpo del select -->
      <div>
        <form class="form-inline">
          <div class="form-group mb-2">
          </div>
          <div class="form-group mx-sm-3 mb-2">


            <input type="text" placeholder="Nombre de la especialidad" name='especialidad' class="input_nombre_especialidad" required>


            <input type="submit" class="boton_registrar_especialidad" name="Enviar" value="Enviar">
        </form>
  </fieldset>


  <fieldset class="contenedores_fieldsets_informacion">
    <table class="tabla_mostrar_especialidad">

      <thead>
        <tr>
          <th class="titulos_tabla_registrar_especialidad">Id Especialidad</th>
          <th></th>
          <th class="titulos_tabla_registrar_especialidad">Nombre de la especialidad</th>


        </tr>
      </thead>
      <tbody>
        <?php
        include('../controladores/con-especialiadad.php');
        while ($row = mysqli_fetch_array($consulta2)) {
        ?>

          <tr>
            <td><?php echo $row['id_esp'] ?></td>
            <td>---</td>
            <td><?php echo $row['n_espe'] ?></td>

          </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
  </fieldset>


  </div>


  <footer>
        <br>
        <br>
        <label id="creado_por">©Creado por ADSI</label>

  </footer>
</body>

</html>