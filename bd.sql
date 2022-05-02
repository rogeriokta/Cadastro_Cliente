CREATE TABLE cliente(
id int auto_increment primary key,
nome varchar(60) not null,
email varchar(60) not null,
cpf varchar(14) not null,
nascimento varchar(10) not null,
telefone varchar(12),
observacoes varchar(100));