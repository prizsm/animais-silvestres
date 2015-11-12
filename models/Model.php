<?php

// CI_Model eh do codeIgnitor
class Model extends CI_Model{
   
    // $contato vem do controller
    public function insert(Contato $contato){
        $this->db->insert('Contato',$contato);
    }
    
    public function searchAll(){
        // faz a consulta no banco de dados
        $query =  $this->db->query("Select * from Contato");
        
        // manda o resultado da consulta (query) para o controller
        return $query->result();
    }
    
}