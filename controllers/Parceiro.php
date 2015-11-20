<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parceiro extends CI_Controller {

	public function parceiros(){
		$this->load->view('parceiro');
	}
	
	public function doPostParceiro(){
		require_once APPPATH."models/Parceiro.php";
		$this->load->model('modelparc');
		$n = $this->modelparc;
		$n->insert(new Parceiros($_POST["nome"],$_POST["sexo"],$_POST["interesse"],$_POST["atendimento"],$_POST["telefone"],$_POST["url"],$_POST["email"],$_POST["comentarios"])); 
		$this->load->view('obrigada2.php');
	}
	
        public function admin2(){
		require_once APPPATH."models/Parceiro.php";
		$this->load->model('modelparc');
		$n = $this->modelparc;
		$parceiro = $n->searchAll();
		$data2['parceiro'] = $parceiro;
		$this->load->view('lista2',$data2);
	}

}