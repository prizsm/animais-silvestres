<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parceiro extends CI_Controller {

	// index.php/parceiro/parceiros
	// chama pagina dos parceiros
	public function parceiros(){
		$this->load->view('parceiro');
	}
	
	// index.php/parceiro/doPostParceiro
	public function doPostParceiro(){
		require_once APPPATH."models/Parceiro.php";
		$this->load->model('modelparc');
		$n = $this->modelparc;
		$n->insert(new Parceiros($_POST["nome"],$_POST["sexo"],$_POST["interesse"],$_POST["atendimento"],$_POST["telefone"],$_POST["url"],$_POST["email"],$_POST["comentarios"])); 
		$this->load->view('obrigada2.php');

	}
	

	
	// /index.php/parceiro/logout    
    public function logout(){
        $this->session->unset_userdata("_ID");
        $this->session->unset_userdata("_LOGIN");
       $this->load->view("index");
    }
    
    public function entrar(){
    $this->load->view("login");
    }
    
    public function login(){
       $login = $_POST["login"];
       $senha = $_POST["senha"];
	  if ($login === "sorensen" && $senha === "sorensen"){
        $this->session->set_userdata("_ID","admin");
       redirect("/parceiro/admin2");
        }else{
		$this->session->set_userdata("_ID","comum");
        $this->session->set_userdata("_LOGIN",$login);
     	redirect("/outros/index");
    }
    }
    
        public function admin2(){
        $a = $this->session->userdata("_ID");
        if($a === "admin"){
		require_once APPPATH."models/Parceiro.php";
		$this->load->model('modelparc');
		$n = $this->modelparc;
		$parceiro = $n->searchAll();
		
		$data2['parceiro'] = $parceiro;

		$this->load->view('lista2',$data2);

        }else{
		$this->load->view("login");
        }
    
}

}