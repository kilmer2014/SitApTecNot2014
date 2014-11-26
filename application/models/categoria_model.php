<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class categoria_model extends CI_Model {

	function listar()
	{
		$query = $this->db->get('Categoria');	
		return $query->result();
	}

	function create($data)
	{
		$this->db->insert('Categoria',$data);
	}

	function getid()
	{
		$this->db->where('ID', $this->uri->segment(3));
		$query = $this->db->get('Categoria');
		return $query->result();
	}

	function atualizar($data)
	{
		$this->db->where('ID', $this->input->post('ID'));
		$this->db->update('Categoria',$data);
	}

	function deletar()
	{
		$this->db->where('ID', $this->uri->segment(3));
		$this->db->delete('Categoria');
	}

}