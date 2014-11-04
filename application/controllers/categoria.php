<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class categoria extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('categoriaModel');
    }

    public function index() {
        $this->load->view('categoria');
    }

    public function create() {
        $data = array(
            'NomeCategoria' => $this->input->post('NomeCategoria'),
            'DescCategoria' => $this->input->post('DescCategoria')
        );
        $this->categoriaModel->create($data);
        redirect(base_url() . "index.php/categoria/listar");
    }

    public function editar() {
        $data['record'] = $this->categoriaModel->getid();
        $this->load->view('categoriaedit', $data);
    }

    public function listar() {
        $data['record'] = $this->categoriaModel->listar();
        $this->load->view('categoria.php', $data);
    }

    public function atualizar() {
        $data = array(
            'NomeCategoria' => $this->input->post('NomeCategoria'),
            'DescCategoria' => $this->input->post('DescCategoria'),
        );
        $this->categoriaModel->atualizar($data);
        redirect('categoria/listar');
    }

    public function deletar() {
        $this->categoriaModel->deletar();
        redirect('categoria/listar');
    }

}
