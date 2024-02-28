<?php
    class StatusModel extends CI_Model
    {
        function __construct(){
            $this->load->database();
        }
        public function GetCatalogStatus(){
            $sql = $this->db->get_where("Status", ["Status" => 1]);
            return $sql->result();
        }
    }
?>