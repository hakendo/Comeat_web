<?php
//Remoto
/*
function abrirConexion()
  {
    $conexion = mysql_connect("localhost","dodoxsg1_appcom","1a5038aa") or die("No se pudo conectar con el servidor de la base de datos.");
    return $conexion;
  }
*/
//Local
function abrirConexion()
  {
    $conexion = mysql_connect("localhost","root","") or die("No se pudo conectar con el servidor de la base de datos.");
    return $conexion;
  }
function cerrarConexion()
  {
    $cerrar =mysql_close();
    return $cerrar;
  }
?>
