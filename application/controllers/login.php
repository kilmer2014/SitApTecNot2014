<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->load->model('usuarios_model', 'usuarios_model');
        $query = $this->usuarios_model->valida();

        $userID = 0;
        $userNome = "";
        $foto = "";
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        //Pega o ID do usuário logado

        $userID = $query[0]->ID;
        $userNome = $query[0]->Nome . " " . $query[0]->SobreNome;
        $foto = $query[0]->Foto;

        if ($userID > 0) {
            $data = array('login' => $this->input->post('usuario'), 'ID' => $userID, 'NomeCompleto' => $userNome, 'Foto' => $foto, 'logged' => true);
            $this->session->set_userdata($data);
            redirect('home');
        } else {
            $this->load->view('home-header');
            $this->load->view('home');
            $this->load->view('home-footer');
            echo "<script>alert('Usuário ou senha inválidos.');</script>";
           
            
        }
    }

}
