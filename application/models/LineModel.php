<?php
    class LineModel extends CI_Model
    {
        function __construct(){
            $this->load->database();
        }
        public function GetCatalogLines(){
            $sql = $this->db->get_where("Lines", ["Status" => 1]);
            return $sql->result();
        }
    }
?>