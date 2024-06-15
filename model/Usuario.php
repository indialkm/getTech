<?php

class Usuario{
    private $id;

    private $usuario;

    private $senha;

    private $nome;

    private $email;

    private $foto;

     // Getters
     public function getId() {
        return $this->id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFoto() {
        return $this->foto;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    
}
