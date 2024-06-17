<?php
/**
 * Controlador Libros
 */
class Libros extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("LibrosModelo");
  }

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //Leer los productos mas vendidos
      //
      $data = $this->getLibros();
      //
      $datos = [
        "titulo" => "Libros",
        "activo" => "libros",
        "data" => $data,
        "menu" => true
      ];
      $this->vista("librosVista",$datos);
    } else {
      header("location:".RUTA);
    }
  }

  public function getLibros()
  {
    return $this->modelo->getLibros();
  }
}
?>