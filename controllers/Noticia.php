<?php
    class Noticia extends CI_Controller{
    	
    	public function noticias(){
    		$this->load->view('noticia');
    	}
    	
        public function doPostNoticia(){
		    require_once APPPATH."models/noticias.php";
		    $this->load->model('modelnot');
		    $m = $this->modelnot;
		    $animal = $_POST["animal"];
		    $titulo = $_POST["titulo"];
		    $materia = $_POST["materia"];
		    $f = new Fabrica();
		    $noticia = $f->createAnimal($animal, $titulo, $materia);
		    $noticia->animal = $noticia->getCatId();
		    $m->insert($noticia);
			$this->load->view('noticia');
    		echo "<h1>Notícia cadastrada com sucesso!!</h1>";
	    }
	    
	    public function listarnoticia($animal){
		    require_once APPPATH."models/noticias.php";
		    $this->load->model('modelnot');
		    $m = $this->modelnot;
		    $noticia = $m->searchAll($animal);
		$data['noticia'] = $noticia;
		$this->load->view('noticias',$data);
	    }
    }