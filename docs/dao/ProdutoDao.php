<?php
    class ProdutoDao{
        public function inserir(produto $pro){
            try{
                $sql = "INSERT INTO produto(nome, valor, descricao, estoque) VALUES (:nome, :valor, :descricao, :estoque)";
                $con_sql = ConnectionFactory::getConnection()->prepare($sql);
                $con_sql->bindValue(":nome", $pro->getNome());
                $con_sql->bindValue(":valor", $pro->getValor());
                $con_sql->bindValue(":descricao", $pro->getDescricao());
                $con_sql->bindValue(":estoque", $pro->getEstoque());
                return $con_sql->execute();
            }catch(PDOException $e){
                echo "<p>Erro ao inserir Produto</p> $e";
            }
        }

        public function read(){
            try{
                $sql = "SELECT * FROM produto";
                $result = ConnectionFactory::getConnection()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $produtoLista = array();
                foreach($lista as $l){
                    $produtoLista[] = $this->listarProduto($l);
                }
                return $produtoLista;
            }catch(PDOException $e){
                echo "Ocorreu um erro ao listar Produto: $e";
            }
        }

        public function listarProduto($row){
            $produto = new produto();
            $produto->setId($row['id']);
            $produto->setNome($row['nome']);
            $produto->setValor($row['valor']);
            $produto->setDescricao($row['descricao']);
            $produto->setEstoque($row['estoque']);
            return $produto;
        }

        public function delete(produto $pro) {
            try{
                $sql = "DELETE FROM produto WHERE id = :id";
                $con_sql = ConnectionFactory::getConnection()->prepare($sql);
                $con_sql->bindValue(":id", $pro->getId());
                return $con_sql->execute();
            }catch(PDOException $e){
                echo "erro ao excluir Produto: $e";
            }
        }

    }
?>