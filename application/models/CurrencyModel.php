<?php
    class CurrencyModel extends CI_Model
    {
        function __construct(){
            $this->load->database();
        }
        public function GetCatalogCurrencies(){
            $sql = $this->db->get_where("Currencies", ["Status" => 1]);
            return $sql->result();
        }
    }
?>