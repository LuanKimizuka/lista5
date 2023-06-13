-- arquivo de criação de banco de dados

DROP  DATABASE IF EXISTS lista6;
CREATE DATABASE lista6;

USE lista6;

CREATE TABLE agenda 
(
	id_agenda int not null auto_increment,
	nome varchar(50) not null,
	apelido varchar(40) not null,
	endereco varchar(70) not null,
	bairro varchar(50) not null,
	cidade varchar(50) not null,
	estado varchar(2) not null,
	telefone varchar(15) not null,
	celular varchar(15) not null,
	email varchar(70) not null,
	dt_cadastro date not null,
	foto varchar(50),
	PRIMARY KEY(id_agenda)
    
);

-- INSERIR DADOS

/*

USE projeto1;
 
-- ISNERIR DADOS

INSERT INTO usuario (nome_usuario, fone_usuario, email_usuario, senha_usuario) values ('CASSIO', '(18)3622-9046','cassio@mail.com','1234');

-- ALTERAR DADOS
SELECT * FROM usuario;

*/


-- ALTERAR DADOS

/*
UPDATE usuario SET nome_usuario="Zezinho", email_usuario = "ze.gmail.com"
WHERE id_usuario=2;
*/