<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControlTrabajos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	

		$this->load->model('Modelo');
	}

	public function index()
	{
		$this->load->view('CreacionT.php');
    }
    public function crearT(){
		if($_POST){
			$this->Modelo->crearTabla($_POST['NombreCategoria']);
        }
        
		$this->load->view('mensage.php');
    }
    

}
?>