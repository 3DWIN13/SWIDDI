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
        if(isset($_POST['editar'])){

        
  //      echo $_POST['editar'];
        $str = explode(",",$_POST['editar']);
//echo $str[1];
$str2 = "'$str[1]'";
//echo $str2;
        $datos = array();

        $str3=$str[0];

		$datos['tabla'] = $this->Modelo->cargar3($str2,$str[0]);
        $this->load->view('edit.php',$datos);}

        if(isset($_POST['dell'])){

            
  //      echo $_POST['editar'];
        $str = explode(",",$_POST['dell']);
        //echo $str[1];
        $str2 = "'$str[1]'";
        //echo $str2;
                $datos = array();
        
                $str3=$str[0];
        
               $this->Modelo->eliminar($str2,$str[0]);
                $this->load->view('mensage');
        }

        if(isset($_POST['drop'])){

            
            //      echo $_POST['editar'];
                 // $str = explode(",",$_POST['dell']);
                  //echo $str[1];
                  //$str2 = "'$str[1]'";
                  //echo $str2;
                    //      $datos = array();
                  
                      //    $str3=$str[0];
                  
                         $this->Modelo->drop($_POST['drop']);
                          $this->load->view('mensage');
                  }

                  if(isset($_POST['pagi'])){
                      setcookie("saladita", $_POST['pag'], time()+86400);
                      $this->load->view('mensage');
                  }
    }
    public function editaruntrabajo(){
      
        $this->Modelo->editar($_POST['tabla2'],$_POST['id2'],$_POST['location'],$_POST['position'],$_POST['company'],$_POST['description'],$_POST['howtoapply'],$_POST['tabla2']);

        $this->load->view('mensage');
    }
//$latabla,$id,$location,$position,$company,$description,$howtoapply,$category
}