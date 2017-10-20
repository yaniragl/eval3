<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->helper('form');

		$this->load->model('form_model');  
	}

	public function index()
	{

		$this->load->view('Formulario');

	}	
		
		function validar()

	{
		
	    // echo aqui estamos haciendo los cambios


		$name = $this->input->post('nombre1');
		
		$lastname = $this->input->post('apellido1');

		$email = $this->input->post('correo');

		echo "Nombre:".$nombre1."Apellido:".$lastname."correo:"$"correo".;

		//Aqui estamos creando el array

		$data = array('nombre' => $this->input->post('nombre1'),'apellido' => $this->input->post('apellido1')"correo" => $this->input->post("correo"));

		//aqui se llama la funcion para guardar en base de datos

		$this->form_model->guardar($data);
	
	}

}