<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cadastro extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('usuarioModel');
    }
	
	public function index()
	{
            $this->load->view('cadastro');
	}

	/*public function retrieve()
	{	
		$data['record'] =  $this->usuarioModel->retrieve();
		$this->load->view('v_tampil.php',$data);
	}

	public function form_insert()
	{
		$this->load->view('v_insert');
        }*/

	public function create()
	{
		$data = array(
                    'Login' => $_POST['Login'],
                    'Senha' => $this->input->post('Senha'),
                    'Email' => $this->input->post('Email')
                             );
		$this->usuarioModel->create($data);
                redirect(base_url()."index.php/login");
	}

	/*public function form_edit()
	{
		$data['record']=$this->usuarioModel->getid();
		// $this->uri->segment(3);
		$this->load->view('v_edit',$data);
	}

	public function update()
	{
		$data = array(
					   'Login' => $this->input->post('Login'),
					   'Senha' => $this->input->post('Senha'),
					   'Email' => $this->input->post('Email')
					   
					);
		$this->usuarioModel->update($data);
		redirect('welcome/retrieve');
	}

	public function delete()
	{
		$this->usuarioModel->delete();
		redirect('welcome/retrieve');
	}*/
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */