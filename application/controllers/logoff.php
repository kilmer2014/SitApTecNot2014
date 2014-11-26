<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class logoff extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->session->sess_destroy();
    }
    
    public function index() 
    {
        redirect('welcome');
    }
}