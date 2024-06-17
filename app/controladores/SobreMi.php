<?php
/**
 * Controlador SobreMi
 */
class SobreMi extends Controlador{
  private $modelo;

  function __construct(){}

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //
      $datos = [
        "titulo" => "Bienvenid@ a nuestra tienda",
        "activo" => "sobremi",
        "menu" => true
      ];
      $this->vista("sobremiVista",$datos);
    } else {
      header("location:".RUTA);
    }
  }
}
?>