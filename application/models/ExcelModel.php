<?php
class ExcelModel extends CI_Model {
  function __construct() {
    parent::__construct();
    $this->load->database();
  }
    public function insertar_producto($datos) {
        $this->db->insert('products', $datos);
        $producto_id = $this->db->insert_id();
        return $producto_id;
    }
}
?>