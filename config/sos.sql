create database SOS_Patinhas;
use SOS_Patinhas;

-- Partes Editáveis

create table endereco_evento(
id_endereco_evento int primary key auto_increment,
rua varchar(50) not null,
bairro varchar(50) not null,
complemento varchar(50) not null
);

create table evento(
id_evento int primary key auto_increment,
nome varchar(50) not null,
descricao varchar(100) not null,
id_endereco_evento int,
foreign key (id_endereco_evento) references endereco_evento(id_endereco_evento),
foto blob
);

create table pagamento(
id_pagamento int primary key auto_increment,
fotoQRCode blob not null,
chave varchar(20) not null,
nome_da_conta varchar(50) not null,
conta varchar(8) not null,
agencia varchar(4) not null
);

create table arrecadacao(
id_arrecadacao int primary key auto_increment,
titulo varchar(50) not null,
nomeAnimal varchar(50) not null,
nomeDono varchar(50) not null,
descricao varchar(100) not null,
valorArrecadacao int not null,
valorArrecadado int not null,
foto blob,
id_pagamento int,
foreign key (id_pagamento) references pagamento(id_pagamento)
);

create table pagInicio_carrossel(
id_pagInicio_carrossel int primary key auto_increment,
foto blob not null,
texto varchar(30)
);

create table pagInicio_fotos(
id_pagInicio_fotos int primary key auto_increment,
foto blob not null,
texto varchar(30)
);

create table pag_noticia(
id_noticia int primary key auto_increment,
titulo varchar (50) not null,
foto blob not null,
link varchar(2048) not null
); 

create table pagQS_Banner(
id_pagQS_Banner int primary key auto_increment,
foto blob
);

create table pagQS_carrosselMiddle(
id_pagQS_carrosselMiddle int primary key auto_increment,
foto blob,
texto varchar(50)
);

create table pagQS_carrosselBottom(
id_pagQS_carrosselBottom int primary key auto_increment,
foto blob
);

create table pagCA_endereco(
id_pagCA_endereco int primary key auto_increment,
foto blob,
texto varchar(50)
);

create table pagCA_texto(
id_pagCA_texto int primary key auto_increment,
titulo varchar(30),
texto varchar(50)
);

create table pagCA_valores(
id_pagCA_valores int primary key,
texto varchar(50)
);


-- Area do Admin

create table Adm(
id_adm int primary key auto_increment,
nome varchar(50) not null,
email varchar(254) not null,
senha varchar(128) not null,
cpf varchar(14) not null,
telefone varchar(20) not null
);

create table membro(
id_membro int primary key auto_increment,
nome varchar(50) unique not null,
email varchar(254) not null,
senha varchar(128) not null,
telefone varchar(20) not null
);


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
foto blob,
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
id_fot int primary key auto_increment,
id_animal int,
foreign key (id_animal) references animal(id_animal),
caminho_foto varchar(100)
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


select * from pagQS_Banner;

