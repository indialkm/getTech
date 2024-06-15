<?php

class Produto{
   
    private $id;
    private $nomeDoProduto;
    private $quantidade;
    private $preco;
    private $descricao;
    private $fotos;
    private $cliente;
    private $categoria;

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNomeDoProduto() {
        return $this->nomeDoProduto;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getFotos() {
        return $this->fotos;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    // Setters
    public function setNomeDoProduto($nomeDoProduto) {
        $this->nomeDoProduto = $nomeDoProduto;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setFotos($fotos) {
        $this->fotos = $fotos;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    //Vai ser necessário uma relação de um produto para um cliente

}