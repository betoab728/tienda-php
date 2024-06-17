<?php
/**
 * Admon Inicio Modelo
 */
class AdmonInicioModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }
}
?>