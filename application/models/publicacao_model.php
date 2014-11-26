<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class publicacao_model extends CI_Model {

	function listar()
	{
                $this->db->order_by("ID", "DESC");
		$query = $this->db->get('Publicacao');	
                
		return $query->result();
	}
        
	function listarPublicas()
	{
                $this->db->order_by("ID", "DESC");
                $this->db->where("TipoPrivacidade" , 0);
		$query = $this->db->get('Publicacao');	
                
		return $query->result();
	}
        
        function listarById($ID)
	{
                $this->db->order_by("ID", "DESC");
                 $this->db->where("UsuarioID", $ID);
		$query = $this->db->get('Publicacao');	
                
		return $query->result();
	}

	function create($data)
	{
            $this->db->insert('Publicacao',$data);
	}

	function getid($id)
	{
		$this->db->where('ID', $id);
		$query = $this->db->get('Publicacao');
		return $query->result();
	}

	function atualizar($data)
	{
		$this->db->where('ID', $this->input->post('ID'));
		$this->db->update('Publicacao',$data);
	}

	function deletar($id)
	{
		$this->db->where('ID', $id);
		$this->db->delete('Publicacao');
	}

}