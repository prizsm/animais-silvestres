<?php

// Classe do banco de dados
class Contato{
    
    public $nome, $categoria, $telefone, $email, $comentarios;
    
    public function __construct($nome, $categoria, $telefone, $email, $comentarios){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->comentarios = $comentarios;
    }
}
