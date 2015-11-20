<?php
    abstract class Noticias{
        public $titulo, $materia;
        
        public function __construct($titulo, $materia){
            $this->titulo = $titulo;
            $this->materia = $materia;
        }
        
        abstract public function getCatId();
    }
    
    class Aves extends Noticias{
        public function getCatId(){
            return 1;
        }
    }
    
    class Coelhos extends Noticias{
        public function getCatId(){
            return 2;
        }
    }
    
    class Peixes extends Noticias{
        public function getCatId(){
            return 3;
        }
    }
    
    class Repteis extends Noticias{
        public function getCatId(){
            return 4;
        }
    }

    class Roedores extends Noticias{
        public function getCatId(){
            return 5;
        }
    }
    
    class Outros extends Noticias{
        public function getCatId(){
            return 6;
        }
    }

    class Fabrica{
        public function createAnimal($catanimal, $titulo, $materia){
            if($catanimal === "Aves"){
                return new Aves($titulo,$materia);
            }  
            if($catanimal === "Coelhos"){
                return new Coelhos($titulo,$materia);
            }  
            if($catanimal === "Peixes"){
                return new Peixes($titulo,$materia);
            }  
            if($catanimal === "Repteis"){
                return new Repteis($titulo,$materia);
            }  
            if($catanimal === "Roedores"){
                return new Roedores($titulo,$materia);
            }  
            if($catanimal === "Outros"){
                return new Outros($titulo,$materia);
            }  
        }
    }