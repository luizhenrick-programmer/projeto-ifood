<?php

class Cardapio {
    private $id;
    private $nome;
    private $ingredientes;
    private $categoria;
    private $restaurante;
    private $url;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIngredientes() {
        return $this->ingredientes;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getRestaurante() {
        return $this->restaurante;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setId($id) {
        $this->id = $id;
    }   
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setIngredientes($ingredientes) {
        $this->ingredientes = $ingredientes;
    }
    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setRestaurante($restaurante) {
        $this->restaurante = $restaurante;
    }
    public function setUrl($url) {
        $this->url = $url;
    }
}