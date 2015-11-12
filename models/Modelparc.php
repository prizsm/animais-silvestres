<?php

// CI_Model eh do codeIgnitor
class Modelparc extends CI_Model{
   
    // $parceiro vem do controller
    // a referencia do classe é Parceiros, mesma confusao feita no arquivo parceiro.php da pasta controller
    public function insert(Parceiros $parceiro){
        $this->db->insert('Parceiro',$parceiro);
    }
    
    public function searchAll(){
        // faz a consulta no banco de dados
        $query = $this->db->query("Select * from Parceiro");
        
        // manda o resultado da consulta (query) para o controller
        return $query->result();
    }
    
}