<?php
    class BrandModel extends CI_Model
    {
        function __construct(){
            $this->load->database();
            $this->GetUsdExchangeRate();
        }
        public function GetCatalogLines(){
            $sql = $this->db->get_where("Line", ["Status" => 1]);
            return $sql->result();
        }
    }
?>