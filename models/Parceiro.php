<?php

class Parceiros{
    
    public $nome, $sexo, $interesse, $atendimento, $telefone, $url, $email, $comentarios;
    
    public function __construct($nome, $sexo, $interesse, $atendimento, $telefone, $url, $email, $comentarios){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->interesse = $interesse;
        $this->atendimento = $atendimento;
        $this->telefone = $telefone;
        $this->url = $url;
        $this->email = $email;
        $this->comentarios = $comentarios;
    }
}
