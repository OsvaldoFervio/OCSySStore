<?php
    class BrandModel extends CI_Model
    {
        function __construct(){
            $this->load->database();
        }
        public function GetCatalogBrands(){
            $sql = $this->db->get_where("Brands", ["Status" => 1]);
            return $sql->result();
        }
    }
?>