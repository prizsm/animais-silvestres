<?php

class Model extends CI_Model{
   
    public function insert(Contato $contato){
        $this->db->insert('Contato',$contato);
    }
    
    public function searchAll(){
        $query =  $this->db->query("Select * from Contato ORDER BY id DESC");
        return $query->result();
    }

}