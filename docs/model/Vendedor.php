
<?php
class Vendedor{
    private $id;
    private $nome;
    private $email;
    private $endereco;
    private $documento;

    public function __construct($nome = null){
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getDocumento(){
        return $this->documento;
    }

    public function setDocumento($documento){
        $this->documento = $documento;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function __toString(){
        return "Vendedor: Nome: {$this->nome} - E-mail: {$this->email} - Endereço: {$this->endereco} - Documento: {$this->documento} - ";
    }
}
?>
