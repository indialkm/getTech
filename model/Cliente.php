<?php

require_once "Usuario.php";

class Cliente extends Usuario{
     private $telefone;
     private $instagram;
     private $facebook;
     private $produtos = array();

     private $favorito = array();



     public function getTelefone() {
        return $this->telefone;
    }

    public function getInstagram() {
        return $this->instagram;
    }

    public function getFacebook() {
        return $this->facebook;
    }


     public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setInstagram($instagram) {
        $this->instagram = $instagram;
    }

    public function setFacebook($facebook) {
        $this->facebook = $facebook;
    }


    //Vai ser necessário métodos para adicionar uma Lista de favoritos
    //Criar a relação com produtos: Um cliente para vários produtos, mas um Produto para cada Cliente.

}