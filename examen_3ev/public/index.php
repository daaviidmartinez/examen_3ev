
<?php
require "../src/Conexion.php";
require "../src/Proyecto.php";

$e=new Proyecto();
$e->conectar();
$resultado=$e->listarProyectos();
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>REGISTRO DE TRABAJADOR</h2>
      <form action="registro.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre" value="" id="nombre">
    <div id="hidden" style='display:none;'>Debes rellenar este campo</div>
    </div>
    <br>
    <label for="apellidos" >Apellidos:</label><br>
    <input type="text" name="apellidos" value="" id="apellidos">
    <div id="hidden1" style='display:none;'>Debes rellenar este campo</div>
    </div>
    <br>
    <br>
    <label for="precio_horas">precio_hora:</label><br>
    <input type="text" name="precio_hora" value="" id="precio_hora">
    <div id="hidden2" style='display:none;'>Debes rellenar este campo</div>
    <div id="hidden3" style='display:none;'>Tiene que ser un número</div>
    <br>
    </div>
    <label for="horas">horas:</label><br>
    <input type="text" name="horas" value="" id="horas">
    <div id="hidden4" style='display:none;'>Debes rellenar este campo</div>
    <div id="hidden5" style='display:none;'>Tiene que ser un número</div>
    <br>
    </div>
      <br>Evento<br>
      <select class="" name="proyecto" id="proyecto">
        <?php
          foreach ($resultado as $proyecto) {
            $id=$proyecto["id"];
            $nombre=$proyecto["nombre"];
            echo "<option value='$id'>$nombre</option>";
          }
        ?>
      </select>
      <br><br>
      <button type="submit" onclick="return comprobar();">Registrarse</button>
    </form>
  </body>
  <script type="text/javascript" src="./js/comprobar.js"></script>
</html>