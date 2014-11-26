<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($data) {
  
        return $this->db->insert('usuario', $data);
    }
function getUserName($ID)
{
    $this->db->where('ID', $ID);
    $query = $this->db->get('usuario');
    return $query;
}
    function listar() {
        $query = $this->db->get('usuario');
        return $query->result();
    }

    function editar($ID) {
        $this->db->where('ID', $ID);
        $query = $this->db->get('Usuario');
        return $query->result();
    }

    function atualizar($data) {
        $this->db->where('ID', $this->session->userdata('ID'));
        $this->db->set($data);
        return $this->db->update('Usuario');
    }

    function deletar($idusuario) {
        $this->db->where('idusuario', $idusuario);
        return $this->db->delete('usuario');
    }
    
     function valida() {
        
        $this->db->where('Login', $this->input->post('usuario'));
        $this->db->where('Senha', $this->input->post('senha'));

        $query = $this->db->get('Usuario');
        
      
        if ($query->num_rows == 1) {
            return $query->result(); // Retorna as informações do usuario
        }
    }
    
     function logado() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
            redirect('welcome');
        }
    }

}

/* End of file usuarios_model.php */
/* Location: ./application/models/usuarios_model.php */