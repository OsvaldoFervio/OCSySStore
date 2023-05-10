<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('ProductModel'));
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data  = $this->ProductModel->GetProducts();

		$brandS = $this->BrandModel->GetCatalogBranches();
		$linesS = $this->LineModel->GetCatalogLines();
		$serieS = $this->SerieModel->GetCatalogSeries();
		$statusS = $this->StatusModel->GetCatalogStatus();
		$currencyS = $this->CurrencyModel->SelectCurrency();

		var_dump($brandS);
		$totals = $this->ProductModel->GetTotalsProducts();
		//var_dump($data);
		$view= $this->load->view('Store/Index',array('data'=>$data,'totals' => $totals ),TRUE);	
		
		$this->getTemplate($view);
		$this->load->view('Store/Index');

	}

	public function getTemplate($view){
		$data = array(
			'head' => $this->load->view('include_files/head','',TRUE),	
			'leftnav' => $this->load->view('include_files/leftnav','',TRUE),
			'nav' => $this->load->view('include_files/nav','',TRUE),
			'content' => $view,
			'footer' => $this->load->view('include_files/footer','',TRUE),
		);
		$this->load->view('store',$data);
	}

	public function SaveProduct(){
		$codigo = $this->input->post("Code"); //$_POST
		$description = $this->input->post("Description");
		$section = $this->input->post("SectionId");
		$brand = $this->input->post("BrandId");
		$line = $this->input->post("LineId");
		$serie = $this->input->post("SerieId");
		$status = $this->input->post("StatusId");
		$stock = $this->input->post("Stock");
		$price = $this->input->post("Price");
		$currency = $this->input->post("CurrencyId");


		$result = $this->productModel->Saved($codigo, $description, $section, $brand, $line, $serie, $status, $stock, $price, $currency);

		if($result){
			redirect("productcontroller/Success");
		} else {
			$this->index();
		}
	}

	public function GetCatalogBranches(){
		$brandS = $this->BrandModel->GetCatalogBranches();
	}	

	public function GetCatalogLines(){
		$linesS = $this->LineModel->GetCatalogLines();
	}

	public function GetCatalogSeries(){
		$serieS = $this->SerieModel->GetCatalogSeries();
	}	

	public function GetCatalogStatus(){
		$statusS = $this->StatusModel->GetCatalogStatus();
	}

	public function GetCatalogCurrency(){
		$currencyS = $this->CurrencyModel->GetCatalogCurrency();
	}	


	public function Success()
	{
		$info ["title"] = "Datos enviados";
		$this->load->view('products/Success', $info);
	}
}
