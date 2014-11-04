<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class linhadotempo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('linhadotempoModel');
    }

    public function index() {
        $this->load->view('index');
    }

    public function listar() {
        $data['record'] = $this->linhadotempoModel->listar();
        $this->load->view('index.php', $data);
    }

    public function create() {
        $data = array(
            'Login' => $_POST['Login'],
            'Senha' => $this->input->post('Senha'),
            'Email' => $this->input->post('Email')
        );
        $this->usuarioModel->create($data);
        redirect(base_url() . "index.php/login");
    }

  
}
