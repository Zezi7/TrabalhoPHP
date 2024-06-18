<?php
    require_once 'Vendedor.php';
    require_once 'Produto.php';
class Registro{
    private $id;
    private $vendedorId;
    private $produtoId;
    private $nomeVendedor;
    private $nomeProduto;
    private $valor;

    public function __construct() {
        $this->nomeVendedor = new Vendedor();
        $this->nomeProduto = new Produto();
        $this->valor = new Produto();
    }

    public function getNomeVendedor() {
        return $this->nomeVendedor->getNome();
    }

    public function setNomeVendedor($nome) {
        $this->nomeVendedor->setNome($nome);
    }

    public function getNomeProduto() {
        return $this->nomeProduto->getNome();
    }

    public function setNomeProduto($nome) {
        $this->nomeProduto->setNome($nome);
    }

    public function getValor() {
        return $this->valor->getValor();
    }

    public function setValor($valor) {
        $this->valor->setValor($valor);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getVendedorId(){
        return $this->vendedorId;
    }

    public function setVendedorId($vendedorId){
        $this->vendedorId = $vendedorId;
    }

    public function getProdutoId(){
        return $this->produtoId;
    }

    public function setProdutoId($produtoId){
        $this->produtoId = $produtoId;
    }

    public function __toString(){
        return "Vendedor: {$this->vendedorId} - 
        Produto: {$this->produtoId} - 
        Id: {$this->id}";
    }
}
?>