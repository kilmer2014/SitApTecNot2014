<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        // VALIDATION RULES
        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'login', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');
       
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');


        // MODELO MEMBERSHIP
        $this->load->model('usuarioModel', 'usuarioModel');
        $query = $this->usuarioModel->valida();
        
        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('login_view');
        }
        else
        {
            if ($query) 
            {
                $data = array('login' => $this->input->post('login'),'logged' => true);
                $this->session->set_userdata($data);
                redirect('area');
            } 
            else 
            {
                $this->load->view('login_view');
                echo "Usuário ou senha inválidos.";
                form_error('login');
            }
        }
    }

}
