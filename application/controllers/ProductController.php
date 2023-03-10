<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("productModel");
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$info ["title"] = "Registro de datos electronicos";
		$this->load->view('products/Index', $info);
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
