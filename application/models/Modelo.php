<?php
class Modelo extends CI_Model {
    public function __construct()
	{
		parent::__construct();	
        $this->load->database();
		
    }

    function crearTabla($tablaC){
         $this->db->query("CREATE TABLE IF NOT EXISTS `?` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `location` varchar(100) NOT NULL,
            `position` varchar(100) NOT NULL,
            `company` varchar(100) NOT NULL,
            `description` varchar(100) NOT NULL,
            `howtoapply` varchar(200) NOT NULL,
            `category` varchar(50) NOT NULL,
            PRIMARY KEY (`id`)
          )",$tablaC);
    }

    function cargar(){
        $query = $this->db->query('SHOW FULL TABLES FROM swiddi1');

        return $query->result();

    }
    function guardar($location,$position,$company,$description,$howtoapply,$category,$latabla){

        /*$id = $persona['id'];
        if($id+0>0){
            $this->db->where('id=',$id);
            unset($persona['id']);
            $this->db->update('usuarios',$persona);

        }else{*/
            $this->db->query("INSERT INTO `'$latabla'` (location,position,company,description,howtoapply,category) VALUES ('$location','$position','$company','$description','$howtoapply','$category')");
        //}

    }
    function cargar2($latabla){
        $query = $this->db->query("SELECT * FROM `$latabla`");

        return $query->result();

    }
    function editar($latabla,$id,$location,$position,$company,$description,$howtoapply,$category){
       
        $this->db->query("UPDATE `'$latabla'` SET 
        location='$location',
        position='$position',
        company='$company',
        description='$description',
        howtoapply='$howtoapply',
        category='$category'
         WHERE id= '$id'");
    }

    function cargar3($latabla,$elid){
        $query = $this->db->query("SELECT * FROM `$latabla` where id = $elid" );

        return $query->result();

    }
    function eliminar($latabla,$elid){
     $this->db->query("DELETE FROM `$latabla` where id = $elid" );

    }
    function drop($latabla){
        $this->db->query("DROP TABLE `$latabla`");
   
       }
/*****SELECT * FROM `'$latabla'` */
     
    }



/* End of file Controllername.php 
`id` int(11) NOT NULL AUTO_INCREMENT,
            `location` varchar(100) NOT NULL,
            `position` varchar(100) NOT NULL,
            `company` varchar(100) NOT NULL,
            `description` varchar(100) NOT NULL,
            `howtoapply` varchar(200) NOT NULL,
            `category` varchar(50) NOT NULL,
*/
?>
