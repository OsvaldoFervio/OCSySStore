<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BD_Practicas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("bd_practicasModel");
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$info ["titulo"] = "Registro de datos electronicos";
		$this->load->view('bd_practicas/index', $info);
	}

	public function guardar(){
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


		$resultado = $this->bd_practicasModel->guardado($codigo, $description, $section, $brand, $line, $serie, $status, $stock, $price, $currency);

		if($resultado){
			redirect("bd_practicas/correcto");
		} else {
			$this->index();
		}
	}

	public function correcto()
	{
		$info ["titulo"] = "Datos enviados";
		$this->load->view('bd_practicas/correcto', $info);
	}
}
