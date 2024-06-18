<?php
class Produto{
    private $id;
    private $nome;
    private $valor;
    private $descricao;
    private $estoque;

    public function __construct($nome = null, $valor = null){
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    public function aumentarEstoque($unidades){
        if(is_numeric($unidades) AND $unidades > 0){
            $this->estoque += $unidades;
        }
    }

    public function __toString(){
        return "Produto: {$this->nome} - 
        Valor: {$this->valor} - 
        Descrição: {$this->descricao} - 
        Estoque: {$this->estoque} ";
    }
}
?>