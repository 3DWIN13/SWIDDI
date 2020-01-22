<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Usuarios_model");
    }
	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function login(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $res = $this->Usuarios_model->login($username, $password);
    }
}