<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {
	public function contato(){
		$this->load->view('form');
	}
	
	public function doPost(){
		require_once APPPATH."models/Contato.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insert(new Contato($_POST["nome"],$_POST["categoria"],$_POST["telefone"],$_POST["email"],$_POST["comentarios"])); 
		$this->load->view('obrigada');
	}
	
	public function listar(){
		require_once APPPATH."models/Contato.php";
		$this->load->model('model');
		$m = $this->model;
		$contato = $m->searchAll();
		
		$data['contato'] = $contato; 
		$this->load->view('lista',$data);
	}
	
}
