<?php
    class BrandModel extends CI_Model
    {
        function __construct(){
            $this->load->database();
            $this->GetUsdExchangeRate();
        }public function GetCatalogSeries(){
            $sql = $this->db->get_where("Series", ["Status" => 1]);
            return $sql->result();
        }
    }
?>