<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class perfil extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');
        //Definir o timezone - Fuso Horário
        date_default_timezone_set('America/Sao_Paulo');
          $this->usuarios_model->logado();
    }

    public function index() {
        /**
         * Lista todos os registros da tabela usuarios
         */
        $data['dadosPerfil'] = $this->usuarios_model->editar($this->session->userdata('ID'));
        $this->load->view('home-header-logado');
        $this->load->view('home-perfil', $data);
        $this->load->view('home-footer-logado');
     
       
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */