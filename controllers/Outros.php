<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outros extends CI_Controller {

	// index.php/outros/links
	public function links(){
		$this->load->view("links");
	}

	// index.php/outros/curriculo
	public function curriculo(){
		$this->load->view("curriculo");
	}
	
	// index.php/outros/index
	public function index(){
		$this->load->view("index");
	}

    
    
}