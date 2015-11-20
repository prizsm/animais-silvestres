<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outros extends CI_Controller {

	public function links(){
		$this->load->view("links");
	}

	public function curriculo(){
		$this->load->view("curriculo");
	}
	
	public function index(){
		$this->load->view("index");
	}

	public function ops(){
		$this->load->view("ops");
	}

    public function logout(){
        $this->session->unset_userdata("_ID");
        $this->session->unset_userdata("_LOGIN");
        $this->load->view("index");
    }
    
    public function entrar(){
        $this->load->view("login-admin");
    }
    
    public function login(){
       $login = $_POST["login"];
       $senha = $_POST["senha"];
	  if ($login === "sorensen" && $senha === "sorensen"){
      $this->load->view("arearestrita");
        }else{
      $this->load->view("naoautorizado");
    }
    }
    
    public function arearestrita(){
        $this->load->view("arearestrita");
    }
    
    public function naoautorizado(){
        $this->load->view("naoautorizado");
    }
 
}