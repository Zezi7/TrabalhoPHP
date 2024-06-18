<?php
    class VendedorDao{
        public function inserir(Vendedor $ven){
            try{
                $sql = "INSERT INTO Vendedor(nome, email, endereco, documento) VALUES (:nome, :email , :endereco, :documento)";
                $con_sql = ConnectionFactory::getConnection()->prepare($sql);
                $con_sql->bindValue(":nome", $ven->getNome());
                $con_sql->bindValue(":email", $ven->getEmail());
                $con_sql->bindValue(":endereco", $ven->getEndereco());
                $con_sql->bindValue(":documento", $ven->getDocumento());
                return $con_sql->execute();
            }catch(PDOException $e){
                echo "<p>Erro ao inserir vendedor</p> $e";
            }
        }

        public function read(){
            try{
                $sql = "SELECT * FROM vendedor";
                $result = ConnectionFactory::getConnection()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                //$vendedorLista = array();
                foreach($lista as $l){
                    $vendedorLista[] = $this->listarVendedor($l);
                }
                return $vendedorLista;
            }catch(PDOException $e){
                echo "Ocorreu um erro ao listar vendedor: $e";
            }
        }

        public function listarVendedor($row){
            $vendedor = new vendedor();
            $vendedor->setId($row['id']);
            $vendedor->setNome($row['nome']);
            $vendedor->setId($row['email']);
            $vendedor->setEndereco($row['endereco']);
            $vendedor->setDocumento($row['documento']);
            return $vendedor;
        }

        public function delete(vendedor $ven) {
            try{
                $sql = "DELETE FROM vendedor WHERE id = :id";
                $con_sql = ConnectionFactory::getConnection()->prepare($sql);
                $con_sql->bindValue(":id", $ven->getId());
                return $con_sql->execute();
            }catch(PDOException $e){
                echo "erro ao excluir vendedor: $e";
            }
        }

    }
?>