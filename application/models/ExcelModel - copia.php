<?php
class ExcelModel extends CI_Model {
  function __construct() {
    parent::__construct();
    $this->load->database();
  }
  function save_products($data) {
    $this->db->insert_batch('products', $data);
  }
}
?>