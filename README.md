# crudteste

Create usado para criação do banco de dados:
CREATE DATABASE crud;


Create usado para criação da tabela no banco de dados:
CREATE TABLE clientes (
    id int(11) NOT NULL,
    nome varchar(255) NOT NULL,
    sobrenome varchar(255) NOT NULL,
    dataNascimento varchar(255) NOT NULL,
    telefone varchar(255) NOT NULL,
    senha varchar(15) NOT NULL,,
    cidade varchar(255) NOT NULL,
    uf varchar(255) NOT NULL,
    observacao varchar(255) NOT NULL,
    ativo varchar(3)
);

ALTER TABLE clientes
ADD PRIMARY KEY(id);

ALTER TABLE clientes
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

