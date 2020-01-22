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

     
    }



/* End of file Controllername.php */
?>
