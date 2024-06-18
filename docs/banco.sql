-- Active: 1716311489761@@127.0.0.1@3306@trabalhophp
USE trabalhophp;
CREATE TABLE produto(
    id INTEGER(30) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR(30),
    valor VARCHAR(20),
    descricao VARCHAR(255),
     estoque INT(255)
    );

    CREATE TABLE login(
    id INTEGER(30) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR(30),
    senha VARCHAR(30)
    );

    CREATE TABLE Vendedor(
        id INTEGER(30) AUTO_INCREMENT PRIMARY KEY NOT NULL,
        nome VARCHAR(30) NOT NULL,
        email VARCHAR(20),
        endereco VARCHAR(255),
        documento VARCHAR(255) NOT NULL
    );

    CREATE TABLE registro (
      id INTEGER(30) AUTO_INCREMENT PRIMARY KEY NOT NULL,
      vendedorId INT NOT NULL,
      produtoId INT NOT NULL,
      FOREIGN KEY (vendedorId) REFERENCES Vendedor(id),
      FOREIGN KEY (produtoId) REFERENCES produto(id)
    )

      SELECT
                        registro.id as id,
                        vendedor.nome AS vendedor,
                        produto.nome AS produto, produto.valor as valor
                        FROM registro
                        JOIN
                        vendedor ON registro.vendedorId = vendedor.id
                        JOIN
                        produto ON registro.produtoId = produto.id;

    SELECT * FROM produto;

DROP TABLE produto;

DROP TABLE login;

DROP TABLE Vendedor;

