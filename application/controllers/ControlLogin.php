<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControlLogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	

	$this->load->model('Modelo');
	}

	public function index()
	{
		$this->load->view('LoginView.php');
	}

	public function diklogin(){
		if((($_POST['username']=="edwin")&&($_POST['password']=="1234"))||(($_POST['username']=="lisbeth")&&($_POST['password']=="1234"))){
			$this->load->view('falacia.html');
		}else{
			$this->load->view('falacia2.php');
		}
	}
	

}
?>