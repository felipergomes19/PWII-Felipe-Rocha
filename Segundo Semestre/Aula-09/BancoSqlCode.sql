create DATABASE if not exists bancoSql;
use bancoSql;

DROP TABLE dados;

create table dados(
id int auto_increment primary key,
nome varchar(50),
Idade int,
cpf varchar(250)
);