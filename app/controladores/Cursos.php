<?php
/**
 * Controlador Cursos
 */
class Cursos extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("CursosModelo");
  }

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //Leer los productos mas vendidos
      //
      $data = $this->getCursos();
      //
      $datos = [
        "titulo" => "Cursos en línea",
        "activo" => "cursos",
        "data" => $data,
        "menu" => true
      ];
      $this->vista("cursosVista",$datos);
    } else {
      header("location:".RUTA);
    }
  }

  public function getCursos()
  {
    $data = array();
    $data = $this->modelo->getCursos();
    return $data;
  }
}
?>