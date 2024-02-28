<?php
    class SectionModel extends CI_Model
    {
        function __construct(){
            $this->load->database();            
        }

        public function GetCatalogSections(){
            $sql = $this->db->get_where("Sections", ["Status" => 1]);
            return $sql->result();
        }
    }
?>