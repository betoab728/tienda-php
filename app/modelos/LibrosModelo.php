<?php
/**
 * Libros Modelo
 */
class LibrosModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getLibros(){
    $sql = "SELECT * FROM productos WHERE baja=0 AND tipo=2";
    $data = $this->db->querySelect($sql);
    return $data;
  }
}
?>