-- a linha vaixo cria um banco de dados - acresentado a tabela padrão de caracteres utf8 e restrição quando da criação
create database if not exists dbguigo 
default character set utf8
default collate utf8_general_ci;
-- a linha abaixo escolhe o bd que sera usado
use dbguigo;

-- o bloco abaixo cria uma tabela, acrescentado a restrição e o engine
create table if not exists tbUsuarios(
codUsuario int primary key,
nomeUsuario varchar(15) not null,
tipoUsuario char(1),
login varchar(15) not null unique,
senha varchar(15) not null
)engine = InnoDB;
-- o comando abaixo descreve a tabela
describe tbusuarios;
-- a linha abaixo insere dados na tabela(CRUD)
-- create -> insert
insert into tbusuarios(codUsuario, nomeUsuario, tipoUsuario, login,senha)
values(1,'Eduao','1','admin','123');
-- a linha abaixo exibe os dados da tabela
-- read -> select
insert into tbusuarios(codUsuario, nomeUsuario, foneUsuario, tipoUsuario, login,senha)
values(2,'Joao','74 99987676','2','Técnico','222');
insert into tbusuarios(codUsuario, nomeUsuario, foneUsuario, tipoUsuario, login,senha)
values(3,'Manoel','74 99987676','3','Operacional','333');
-- linha abaixo modifica os dados na tabela
-- update -> update
update tbusuarios set foneUsuario ='74 9998-1111' where codUsuario = 2;
UPDATE `dbguigo`.`tbusuarios` SET `tipoUsuario` = '2' WHERE (`codUsuario` = '2');
UPDATE `dbguigo`.`tbusuarios` SET `tipoUsuario` = '3' WHERE (`codUsuario` = '3');
-- a linha abaixo apaga um registro da tabela
-- delete - > delete
delete from tbusuarios where codUsuario = 2;
select * from tbusuarios;
-- Criando a tabela tbCulturas

create table if not exists tbCulturas (
codCultura int primary key not null,
nomeCultura varchar(15) not null,
variedade varchar(15) not null,
cicloEmDias int(4) not null,
dtGerminacao timestamp,
dtBercario timestamp,
dtEngorda timestamp,
dtColheita timestamp
)engine = InnoDB;

describe tbCulturas;

insert into tbCulturas() values(1,'Alface','Manteiga','60');
insert into tbCulturas() values(2,'Alface','Crespa','60');
insert into tbCulturas() values(3,'Alface','Americana','60');

describe tbCulturas;
select * from tbCulturas;

-- Criando a tabela tbDataRealTime 

create table if not exists tbDataRealTime(
data timestamp primary key not null,
temperatura float not null,
umidade float not null,
luminosidade float not null
)engine = InnoDB;

insert into tbDataRealTime() values('2019-07-24 16:15:14.000000', 26.5, 80.2, 65 );

select * from tbDataRealTime;

use dbguigo;
