<?php
    class RegistroDao{
        public function inserir(registro $re){
            try{
                $sql = "INSERT INTO registro(vendedorId, produtoId) VALUES (:vendedorId, :produtoId)";
                $con_sql = ConnectionFactory::getConnection()->prepare($sql);
                $con_sql->bindValue(":vendedorId", $re->getVendedorId());
                $con_sql->bindValue(":produtoId", $re->getProdutoId());
                return $con_sql->execute();
            }catch(PDOException $e){
                echo "<p>Erro ao inserir Registro</p> $e";
            }
        }

        public function read(){
            try{
                $sql = "SELECT
                        registro.id as id,
                        vendedor.nome AS vendedor,
                        produto.nome AS produto, produto.valor as valor
                        FROM registro
                        JOIN
                        vendedor ON registro.vendedorId = vendedor.id
                        JOIN
                        produto ON registro.produtoId = produto.id;";
                $result = ConnectionFactory::getConnection()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $registroLista = array();
                foreach($lista as $l){
                    $registroLista[] = $this->listarRegistro($l);
                }
                return $registroLista;
            }catch(PDOException $e){
                echo "Ocorreu um erro ao listar Registro: $e";
            }
        }

        public function listarRegistro($row){
            $registro = new registro();
            $registro->setId($row['id']);
            $registro->setnomeVendedor($row['vendedor']);
            $registro->setnomeProduto($row['produto']);
            $registro->setValor($row['valor']);
            return $registro;
        }

        public function delete(registro $re) {
            try{
                $sql = "DELETE FROM registro WHERE id = :id";
                $con_sql = ConnectionFactory::getConnection()->prepare($sql);
                $con_sql->bindValue(":id", $re->getId());
                return $con_sql->execute();
            }catch(PDOException $e){
                echo "erro ao excluir Registro: $e";
            }
        }

    }
?>