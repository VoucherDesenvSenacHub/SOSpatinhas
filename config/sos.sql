CREATE DATABASE SOS_PATINHAS;
USE SOS_PATINHAS;

CREATE TABLE ANIMAL(
ID_ANIMAL INT PRYMARY KEY AUTO_INCREMENT,
ID_TIPO_ANIMAL INT,
RACA VARCHAR(100),
ID_PORTE INT,
ID_IDADE INT,
DESCRICAO VARCHAR(100),
FOREIGN KEY (ID_TIPO_ANIMAL) REFERENCES TIPO_ANIMAL(ID_TIPO_ANIMAL),
FOREIGN KEY (ID_PORTE) REFERENCES PORTE(ID_PORTE),
FOREIGN KEY (ID_IDADE) REFERENCES IDADE(ID_IDADE)
);

CREATE TABLE IDADE(
ID_IDADE INT PRYMARY KEY AUTO_INCREMENT,
DS_IDADE VARCHAR(100)
);

CREATE TABLE PORTE(
ID_PORTE INT PRYMARY KEY AUTO_INCREMENT,
DS_PORTE VARCHAR(100)
);

CREATE TABLE TAG(
ID_TAG INT PRYMARY KEY AUTO_INCREMENT,
DS_TAG VARCHAR(100),
ID_ANIMAL INT,
FOREIGN KEY (ID_ANIMAL) REFERENCES ANIMAL(ID_ANIMAL)
);

CREATE TABLE TIPO_ANIMAL();

CREATE TABLE FOTO(
ID_FOTO INT PRYMARY KEY AUTO_INCREMENT,
ID_TABELA INT,
NM_TABELA,
CAMINHO_FOTO VARCHAR(100)
);

CREATE TABLE ARRECADACAO(
ID_ARRECADACAO INT PRYMARY KEY AUTO_INCREMENT,
VL_ARRECADACAO INT,
VL_ARRECADADO INT,
NM_CONTA VARCHAR(100),
NU_CONTA INT,
NU_AGENCIA INT
);

CREATE TABLE EVENTO();
CREATE TABLE MEMBRO();

CREATE TABLE PERMISSAO(
ID_PERMISSAO INT PRYMARY KEY AUTO_INCREMENT,
PAGINA VARCHAR()
);

CREATE TABLE PERMISSAO_MEMBRO(
ID_PERMISSAO_MEMBRO INT PRYMARY KEY AUTO_INCREMENT,
ID_MEMBRO INT,
ID_PERMISSAO INT,
FG_ACESSO BOOL,
FOREIGN KEY (ID_MEMBRO) REFERENCES MEMBRO(ID_MEMBRO),
FOREIGN KEY (ID_ANIMAL) REFERENCES ANIMAL(ID_ANIMAL)
);
CREATE TABLE USUARIO();
CREATE TABLE CIDADE();
CREATE TABLE ESTADO();

CREATE TABLE PARTE_EDITAVEL(
ID_PARTE_EDITAVEL VARCHAR(100),
INPUT_SIMPLES VARCHAR(100),
TEXTAREA VARCHAR(100),

);

CREATE TABLE FORMULARIO();
CREATE TABLE FORMULARIO_PERGUNTA();





-- Area do Usuario

create table endereco(
id_endereco int primary key auto_increment,
cidade varchar(50),
uf varchar(3),
rua varchar(50) not null,
numero varchar(8),
bairro varchar(50) not null,
complemento varchar(50) not null
);

create table usuario(
id_usuario int primary key auto_increment,
nome varchar(50) unique not null,
email varchar(254) not null,
senha varchar(128) not null,
data_nasc date not null,
cpf varchar(14) not null,
rg varchar(12) not null,
telefone varchar(20) not null,
id_foto int,
foreign key (id_foto) references foto(id_foto),
id_endereco int,
foreign key (id_endereco) references endereco(id_endereco)
);


-- Area de Adoção

create table animal(
id_animal int primary key auto_increment,
nome varchar(50),
tipo varchar(50),
raca varchar(30),
porte varchar(7),
descricao varchar(100),
tags varchar(50),
idade varchar(50),
sexo varchar(10)
);

create table foto(
id_foto int primary key auto_increment,
id_table int not null,
tipo_table enum() not null,
caminho_foto int not null
);

create table tag(
id_tag int primary key auto_increment,
id_animal int,
foreign key (id_animal) references animal(id_animal),
tag_nome varchar(50)
);

create table formulario_adocao(
id_formulario_adocao int primary key auto_increment,
id_animal int,
foreign key (id_animal) references animal(id_animal),
id_usuario int,
foreign key (id_usuario) references usuario(id_usuario),
termos boolean,
data_adocao date
);
insert into animal values (
	'',
    'Bartolomeu',
    'Gato',
    'Siamês',
    'Pequeno',
    'Descrição alternativamente variada',
    'Gato Fofo',
    '4 Meses',
    'Macho'
);
insert into animal values (
	'',
    'Bartolomeu',
    'Gato',
    'Siamês',
    'Pequeno',
    'Descrição alternativamente variada',
    'Gato Fofo',
    '4 Meses',
    'Macho'
);
insert into animal values (
	'',
    'Bartolomeu',
    'Gato',
    'Siamês',
    'Pequeno',
    'Descrição alternativamente variada',
    'Gato Fofo',
    '4 Meses',
    'Macho'
);
insert into animal values (
	'',
    'Bartolomeu',
    'Gato',
    'Siamês',
    'Pequeno',
    'Descrição alternativamente variada',
    'Gato Fofo',
    '4 Meses',
    'Macho'
);
insert into animal values (
	'',
    'Bartolomeu',
    'Gato',
    'Siamês',
    'Pequeno',
    'Descrição alternativamente variada',
    'Gato Fofo',
    '4 Meses',
    'Macho'
);
insert into animal values (
	'',
    'Bartolomeu',
    'Gato',
    'Siamês',
    'Pequeno',
    'Descrição alternativamente variada',
    'Gato Fofo',
    '4 Meses',
    'Macho'
);

select * from pagQS_Banner;

