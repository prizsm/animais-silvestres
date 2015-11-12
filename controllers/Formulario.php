<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {
	// index.php/formulario/pagina
	public function pagina(){
		$this->load->view("pagina1");
	}
	
	// index.php/formulario/contato
	public function contato(){
		//chamando a pagina mypage
		// eu quero que essa rota contato me mostre o mypage
		$this->load->view('form');
	}
	
	// index.php/formulario/index
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	// index.php/formulario/doPost
	public function doPost(){
		// controller enxergar o model
		// APPPATH onde esta o codeIgnitor
		require_once APPPATH."models/Contato.php";
		// 'model' eh o Model, aqui passa com letra minuscula
		$this->load->model('model');
		$m = $this->model;
		// "nome" eh o nome do campo do formulario que estou extraindo a informacao para gravar no banco
		$m->insert(new Contato($_POST["nome"],$_POST["categoria"],$_POST["telefone"],$_POST["email"],$_POST["comentarios"])); 
		$this->load->view('obrigada');

	}
	
	// index.php/formulario/listar
	public function listar(){
		require_once APPPATH."models/Contato.php";
		$this->load->model('model');
		$m = $this->model;
		$contato = $m->searchAll();
		
		//$data eh o dicionario do php
		$data['contato'] = $contato; //OBS: O nome deve ser o mesmo que da view e do controller.
		//lista eh o nome da view e $data eh o novo vetor da variavel contato
		
		$this->load->view('lista',$data);

		// soh para ver se deu certo
		//print_r($contato);
	}
	
	// index.php/formulario/form
//	public function form(){
//		$this->load->view('form');
//	}
}
