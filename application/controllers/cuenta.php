<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cuenta extends CI_Controller {
    
	public function index()
	{
        $this->load->view('cuenta/header');
        //$this->load->model('objetivos_m');
        $this->load->view('cuenta/header');
		$this->load->view('cuenta/muro');
        $this->load->view('cuenta/fotter');
	}
    
    
}
