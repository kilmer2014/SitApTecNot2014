<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class publicacao extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->model('publicacao_model');
          $this->load->model('categoria_model', 'categoria_model');
                  $this->load->model('usuarios_model');
  $this->usuarios_model->logado();
    }

    public function index() {
        
         $data['record'] = $this->publicacao_model->listarById($this->session->userdata('ID'));
           $data['categorias'] = $this->categoria_model->listar();
         $this->load->view('home-header-logado');
            $this->load->view('home-logado', $data);
            $this->load->view('home-footer-logado');
    }
    
    public function nova() {
          $novaPublicacao = array(
            'Titulo' =>$this->input->post('titulo'),
            'CategoriaID' => $this->input->post('categoria'),
            'Conteudo' => $this->input->post('conteudo'),
              'UsuarioID'=>$this->input->post('id'),
              'DataCriacao'=> date("Y-m-d H:i:s"),
              'TipoPublicacao' => 0,
              'TipoPrivacidade' => $this->input->post('TipoPrivacidade'),
              'SeFixo' => 0
        );
          
         
         $this->publicacao_model->create($novaPublicacao);
         redirect('home');
    }
    
     function editar($id) {

       $data['record'] = $this->publicacao_model->getid($id); 
       $data['categorias'] = $this->categoria_model->listar();
        $this->load->view('home-header-logado');
        $this->load->view('home-logado-edit-publicacao', $data);
        $this->load->view('home-footer-logado');
    }
     function excluir($id) {

        $this->publicacao_model->deletar($id); 
        redirect('home');
    }
    
    function atualizar()
    {
        $novaPublicacao = array(
            'Titulo' =>$this->input->post('titulo'),
            'CategoriaID' => $this->input->post('categoria'),
            'Conteudo' => $this->input->post('conteudo'),
              'UsuarioID'=>$this->session->userdata('ID'),
              'DataCriacao'=> $this->input->post('dataCriacao'),
            'DataUltimaEdicao' =>date("Y-m-d H:i:s"),
              'TipoPublicacao' => 0,
              'TipoPrivacidade' => $this->input->post('TipoPrivacidade'),
              'SeFixo' => 0
        );
        
         $this->publicacao_model->atualizar($novaPublicacao);
         
         redirect('home');
    }

}
