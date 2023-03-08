<?php

    class productModel extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function Saved($codigo, $description, $section, $brand, $line, $serie, $status, $stock, $price, $currency){
            return $this->db->insert("products", ["Code" => $codigo, "Description" => $description, "SectionId" => $section, "BrandId" => $brand, "LineId" => $line, "SerieId" => $serie, "StatusId" => $status, "Stock" => $stock, "Price" => $price, "CurrencyId" => $currency]);
        }
    }

?>