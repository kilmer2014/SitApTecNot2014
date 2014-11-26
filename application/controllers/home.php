<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model', 'usuarios_model');
        $this->load->model('categoria_model', 'categoria_model');
        $this->load->model('publicacao_model', 'publicacao_model');
        $this->usuarios_model->logado();
   
         }
	
	public function index()
	{
        $data['record'] = $this->publicacao_model->listar();
        $data['categorias'] = $this->categoria_model->listar();
        
       
       // $this->load->view('index_logado',$data);
         $this->load->view('home-header-logado');
            $this->load->view('home-logado', $data);
            $this->load->view('home-footer-logado');
      
    }
}