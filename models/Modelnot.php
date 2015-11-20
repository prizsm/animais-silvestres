<?php

class Modelnot extends CI_Model{
    public function insert(Noticias $noticia){
        $this->db->insert('Noticias',$noticia);
    }
  
    public function searchAll($animal){
        $query =  $this->db->query("Select * from Noticias where animal = $animal ORDER BY id DESC");
        return $query->result();
    }
}