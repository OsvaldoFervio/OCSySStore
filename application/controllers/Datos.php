<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("datosModel");
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$info ["titulo"] = "Registro de datos";
		$this->load->view('datos/index', $info);
	}

	public function registrar(){
		$nombre = $this->input->post("nombre"); //$_POST
		$telefono = $this->input->post("telefono");
		$email = $this->input->post("email");

		$resultado = $this->datosModel->registro($nombre, $telefono, $email);

		if($resultado){
			redirect("datos/correcto");
		} else {
			$this->index();
		}
	}

	public function correcto()
	{
		$info ["titulo"] = "Correcto";
		$this->load->view('datos/correcto', $info);
	}
}
