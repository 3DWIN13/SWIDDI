<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControlPlantilla2 extends CI_Controller {

	public function __construct()
	{
		
    parent::__construct();	

    $this->load->model('Modelo');
	}

	public function index()
	{
        $data = array();
        $dati = array();

		$data['swiddi1'] = $this->Modelo->cargar();
        
       
        

        
        $this->load->view('plantilla2.php', $data,$dati);

	}

}