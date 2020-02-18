<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioModel extends CI_Model {
	
	function listCategorias()
    {
		$this->db->select('BaseTbl.idCategoria, BaseTbl.nombreCategoria');
        $this->db->from('cat_categorias as BaseTbl');
        $query = $this->db->get();
		$result = $query->result();    
        return $result;
	}
	function getMenu(){
		$query = $this->db->query("CALL SP_OBTENER_MENU()");
		return $query->result();
		
		// $this->db->query('CALL SP_OBTENER_MENU()');
		// $query = $this->db->get();
		// $result = $query->result();    
        // return $result;
	}

}
