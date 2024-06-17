<?php include_once("encabezado.php"); 
print "<h2 class='text-center'>".$datos["subtitulo"]."</h2>";
print "<img src='".RUTA."img/".$datos["data"]["imagen"]."' class='rounded float-right'/>";
//Curso en línea
if($datos["data"]["tipo"]==1){
  print "<h4>Descripción:</h4>";
  print "<p>".html_entity_decode($datos["data"]["descripcion"])."</p>";

  print "<h4>¿A quién va dirigido?:</h4>";
  print "<p>".$datos["data"]["publico"]."</p>";

  print "<h4>Objetivos:</h4>";
  print "<p>".$datos["data"]["objetivo"]."</p>";

  print "<h4>Precio (MXN):</h4>";
  print "<p>$".number_format($datos["data"]["precio"],2)."</p>";

  print "<h4>¿Qué es necesario?:</h4>";
  print "<p>".$datos["data"]["necesario"]."</p>";
} else if($datos["data"]["tipo"]==2){
  print "<h4>Autor:</h4>";
  print "<p>".$datos["data"]["autor"]."</p>";

  print "<h4>Editorial:</h4>";
  print "<p>".$datos["data"]["editorial"]."</p>";

  print "<h4>Número de páginas:</h4>";
  print "<p>".$datos["data"]["pag"]."</p>";

  print "<h4>Precio (MXN):</h4>";
  print "<p>$".number_format($datos["data"]["precio"],2)."</p>";

  print "<h4>Resumen:</h4>";
  print "<p>".html_entity_decode($datos["data"]["descripcion"])."</p>";
}
$regresa = ($datos["regresa"]=="")? "tienda" : $datos["regresa"];
print "<a href='".RUTA.$regresa."' class='btn btn-success'/>Regresa</a>";
print "&nbsp";
print "<a href='".RUTA."carrito/agregaProducto/";
print $datos["data"]["id"]."/"; //id del prodcuto
print $datos["idUsuario"]."' "; //id del usuario
print "class='btn btn-success'/>Agregar al carrito</a>";
include_once("piepagina.php"); ?>