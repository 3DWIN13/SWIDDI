<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControlUsuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	

	//	$this->load->model('ModelP');
	}

	public function index()
	{
		$this->load->view('InterfazU.php');
	}

}
?>