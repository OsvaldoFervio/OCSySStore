<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->load->model(array('Auth'));
		$this->load->library(array('form_validation','session'));
		

	}
	public function index()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/navbar');
		$this->load->view('index');		
		$this->load->view('include_files/footer');

		
	}

	public function QuienesSomos()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/navbar');
		$this->load->view('Inicio/quienessomos');		
		$this->load->view('include_files/footer');
	}

	public function ProcesoPreinscripcion()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/navbar');
		$this->load->view('Inicio/procesopreinscripcion');		
		$this->load->view('include_files/footer');
	}

	public function registro()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/navbar');
		$this->load->view('Inicio/procesopreinscripcion');		
		$this->load->view('include_files/footer');
	}

	public function Preinscripcion()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/navbar');
		$this->load->view('Inicio/preinscripcion');		
		$this->load->view('include_files/footer');
	}

	public function Pago()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/navbar');
		$this->load->view('Inicio/pago');		
		$this->load->view('include_files/footer');
	}

	public function GuiaEstudio()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/navbar');
		$this->load->view('Inicio/guiaestudio');		
		$this->load->view('include_files/footer');
	}

	public function PrimerIngreso()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/navbar');
		$this->load->view('Inicio/primeringreso');		
		$this->load->view('include_files/footer');
	}

	public function Login()
	{
		$this->load->view('include_files/header');		
		$this->load->view('Inicio/login');	
		$this->load->view('include_files/footer');
	}

	public function Logueo()
	{
		$user = $this->input->post('user');
		$password = $this->input->post('password');

		if(! $res= $this->Auth->login($user,$password)){
		//echo "Error intenta nuevamente";
		$this->load->view('include_files/header');		
		$this->load->view('Inicio/login');	
		$this->load->view('include_files/footer');
		$this->output->set_status_header(401);
		}
		else{
			$data = array(
				'id'=> $res->UserId,
				'user' =>$res->UserName,
				'is_logged'=>TRUE
			);
			$this->session->set_userdata($data);
			redirect('Dashboard');
		}
		
	}


	

	public function test($id, $mensaje="Hola"){
		echo "Hola mundo del test:".$id . $mensaje;
	}

	public function vistas(){
		$this->load->helper('url'); 
		$data['titulo'] = 'Golden Autos';
		$data['lista'] = array('negro','azul','rojo');
		$this->load->view('vistas',$data);
		
	}

	public function getSpecialModels(){

		$data  = $this->Models->getSpecialModels();
		return $data;
		
	}


	 public function subscribe(){

    	$email = $this->input->post('email');
		
		{
			

			$datos= array(
						'name'  =>"Anonymus",
						'phone'  =>"N/A",
						'email'  =>$email,
						'date' =>date('Y/m/d:h-m-s'),
						);

			var_dump($datos);

			//insertar en la base de datos
			if(!$this->Subscribers->subscribe($datos)){
				$this->output->set_status_header(500);
				echo' oscurrió un accidente';

			}
			else{
				$this->session->set_flashdata('msg','Gracias por suscribirte a nuestro portal');
			redirect(base_url('/'));
			}



			
		}
		var_dump($datos);

    	$vista = $this->load->view('admin/new_model','',true);
       $this-> getTemplate($vista);
    }
}
