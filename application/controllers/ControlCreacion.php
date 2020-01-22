<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControlCreacion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	

		$this->load->model('Modelo');
	}

	public function index()
	{
		$datos = array();

		$datos['cargar'] = $this->Modelo->cargar();
		$this->load->view('trabajosView.php',$datos);
	}
	
	
   
    

}