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
		
		$totals = $this->ProductModel->GetTotalsProducts();
		//var_dump($data);
		$view= $this->load->view('Store/Index',array('data'=>$data,'totals' => $totals ),TRUE);	
		
		$this->getTemplate($view);

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

	public function Success()
	{
		$info ["title"] = "Datos enviados";
		$this->load->view('products/Success', $info);
	}
}
