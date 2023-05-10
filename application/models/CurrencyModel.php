<?php
    class BrandModel extends CI_Model
    {
        function __construct(){
            $this->load->database();
            $this->GetUsdExchangeRate();
        }
        public function GetCatalogCurrency(){
            $sql = $this->db->get_where("Currency", ["Status" => 1]);
            return $sql->result();
        }
    }
?>