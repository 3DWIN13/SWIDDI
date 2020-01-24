<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControlAdmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	

		$this->load->model('Modelo');
	}

	public function index()
	{
		$data = array();

		/*$datos['sysobjects'] = $this->Modelo->cargar2();*/
		
		

		$datos = array();

		/*$datos['swiddi1'] = $this->Modelo->cargar();
		foreach ($datos['swiddi1'] as $key) {
			     // echo $key;
				// var_dump($key ->Tables_in_swiddi1);
				// $data = array();

		$data['objects'] = $this->Modelo->cargar2($key ->Tables_in_swiddi1);
		var_dump($data);
		//var_dump($datos);*/
	
	$this->load->view('InterfazA.php',$data,$datos);
}



	

}
?>