<?php

class Modelparc extends CI_Model{
   
    public function insert(Parceiros $parceiro){
        $this->db->insert('Parceiro',$parceiro);
    }
    
    public function searchAll(){
        $query = $this->db->query("Select * from Parceiro ORDER BY id DESC");
        
        return $query->result();
    }
}