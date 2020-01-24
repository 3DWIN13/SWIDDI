<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControlEdit extends CI_Controller {

	public function __construct()
	{
		
    parent::__construct();	

	$this->load->model('Modelo');
	}

	public function index()
	{
  //      echo $_POST['editar'];
        $str = explode(",",$_POST['editar']);
//echo $str[1];
$str2 = "'$str[1]'";
//echo $str2;
        $datos = array();

        $str3=$str[0];

		$datos['tabla'] = $this->Modelo->cargar3($str2,$str[0]);
		$this->load->view('edit.php',$datos);
    }
    public function editaruntrabajo(){
      
        $this->Modelo->editar($_POST['tabla2'],$_POST['id2'],$_POST['location'],$_POST['position'],$_POST['company'],$_POST['description'],$_POST['howtoapply']);

        $this->load->view('mensage');
    }
//$latabla,$id,$location,$position,$company,$description,$howtoapply,$category
}