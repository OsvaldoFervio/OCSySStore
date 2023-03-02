<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("empresaModel");
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$info ["titulo"] = "Registro de datos electronicos";
		$this->load->view('empresa/index', $info);
	}

	public function guardar(){
		$code = $this->input->post("Code"); //$_POST
		$description = $this->input->post("Description");
		$section = $this->input->post("SectionId");
		$brand = $this->input->post("BrandId");
		$line = $this->input->post("LineId");
		$serie = $this->input->post("SerieId");
		$status = $this->input->post("StatusId");
		$stock = $this->input->post("Stock");
		$price = $this->input->post("Price");
		$currency = $this->input->post("CurrecyId");


		$resultado = $this->empresaModel->guardado($code, $description, $section, $brand, $line, $serie, $status, $stock, $price, $currency);

		if($resultado){
			redirect("empresa/correcto");
		} else {
			$this->index();
		}
	}

	public function correcto()
	{
		$info ["titulo"] = "Datos enviados";
		$this->load->view('empresa/correcto', $info);
	}
}
