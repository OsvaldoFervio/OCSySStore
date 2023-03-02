<?php

    class empresaModel extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function guardado($code, $description, $section, $brand, $line, $serie, $status, $stock, $price, $currency){
            return $this->db->insert("products", ["Code" => $code, "Description" => $description, "SectionId" => $section, "BrandId" => $brand, "LineId" => $line, "SerieId" => $serie, "StatusId" => $status, "Stock" => $stock, "Price" => $price, "CurrencyId" => $currency]);
        }
    }

?>