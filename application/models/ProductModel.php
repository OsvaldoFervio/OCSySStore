<?php
    class ProductModel extends CI_model
    {
        function __construct()
        {
            $this->load->database();
            $this->GetUsdExchangeRate();
        }

        protected $rate = 2.2;

        public function Saved($codigo, $description, $section, $brand, $line, $serie, $status, $stock, $price, $currency){
            return $this->db->insert("products", ["Code" => $codigo, "Description" => $description, "SectionId" => $section, "BrandId" => $brand, "LineId" => $line, "SerieId" => $serie, "StatusId" => $status, "Stock" => $stock, "Price" => $price, "CurrencyId" => $currency]);
        }

        public function GetProducts()
        {
           $this->db->select(
            's.Description as Section,
            b.Description as Brand, 
            l.Description as Line, 
            se.Description as Serie, 
            st.Description as Status, 
            p.*'
        );
        $this->db->from('Products p');
        $this->db->join('Sections s', 'p.SectionId = s.SectionId');
        $this->db->join('Brands b', 'p.BrandId = b.BrandId');
        $this->db->join('Lines l', 'p.LineId = l.LineId');
        $this->db->join('Series se', 'p.SerieId = se.SerieId');
        $this->db->join('Status st', 'p.StatusId = st.StatusId');
        
        $query = $this->db->get();        
        $query=  $query->result();      

        foreach ($query as $item) {
            if ($item->CurrencyId == 1) {
                $item->Price = $item->Price * $this->rate;
            }
            
        }

        return $query;
        }

        public function GetUsdExchangeRate()
        {
            $this->rate = $this->db->query('SELECT Rate  FROM Currencies WHERE CurrencyId = 1;')->row()->Rate;
    
        }


        public function GetTotalsProducts()
        {
            $sql = "SELECT COUNT(*) AS Register,
            sum(1) as Cost,
            sum(1) as Tax,
            sum(1) as Total
            FROM Products"; 
            $query = $this->db->query($sql);

            return $query->row();
        }
        

        
    }

?>