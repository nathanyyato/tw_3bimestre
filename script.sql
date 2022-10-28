create database if not exists marechal;
use marechal;

create table usuarios (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(255),
    email varchar(255),
    senha varchar(255),
    PRIMARY KEY (id)
);

insert into usuarios (nome, email, senha) values (
    'Nathan',
    "nathan@gmail.com",
    md5("123")
);