<?php
    class BrandModel extends CI_Model
    {
        function __construct(){
            $this->load->database();
            $this->GetUsdExchangeRate();
        }
        public function GetCatalogBranches(){
            $sql = $this->db->get_where("Brand", ["Status" => 1]);
            return $sql->result();
        }
    }
?>