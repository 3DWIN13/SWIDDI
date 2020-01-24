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

		$datos['swiddi1'] = $this->Modelo->cargar();
		$this->load->view('trabajosView.php',$datos);
	}

	public function guardar()
	{
		if($_POST){
			$this->Modelo->guardar($_POST['location'],$_POST['position'],$_POST['company'],$_POST['description'],$_POST['howtoapply'],$_POST['cbo'],$_POST['cbo']);//location,position,company,description,howtoapply,category
		}
		$this->load->view('mensage');
	}
	
	
   
    

}