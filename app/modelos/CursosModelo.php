<?php
/**
 * Cursos Modelo
 */
class CursosModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getCursos(){
    $sql = "SELECT * FROM productos WHERE baja=0 AND tipo=1";
    $data = $this->db->querySelect($sql);
    return $data;
  }
}
?>