<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsuarioModel extends CI_Model {

	function retrieve()
	{
		$query = $this->db->get('Usuario');	
		return $query->result();
	}

	function create($data)
	{
		$this->db->insert('Usuario',$data);
	}

	function getid()
	{
		$this->db->where('ID', $this->uri->segment(3));
		$query = $this->db->get('Usuario');
		return $query->result();
	}

	function update($data)
	{
		$this->db->where('ID', $this->input->post('ID'));
		$this->db->update('Usuario',$data);
	}

	function delete()
	{
		$this->db->where('ID', $this->uri->segment(3));
		$this->db->delete('Usuario');
	}

}