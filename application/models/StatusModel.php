<?php
    class BrandModel extends CI_Model
    {
        function __construct(){
            $this->load->database();
            $this->GetUsdExchangeRate();
        }
        public function GetCatalogStatus(){
            $sql = $this->db->get_where("Status", ["Status" => 1]);
            return $sql->result();
        }
    }
?>