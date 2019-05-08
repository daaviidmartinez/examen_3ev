<?php
require "../src/Conexion.php";
require "../src/Trabajador.php";
$a=new Trabajador();
$error=$a->comprobarCampos($_POST);
if (isset($error)) {
if($error){
  echo $error;
}else{
  $a->conectar();
  $a->insertarTrabajador();
  $idTrabajador=$a->ultimoRegistro();
  $a->insertarProyectTrabaj($idTrabajador,$_POST["proyecto"]);
  echo "Correcto";
    }   
}

?>
<html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>