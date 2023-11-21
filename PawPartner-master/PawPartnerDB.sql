create table usuario(
    id_usuario int unsigned not null auto_increment, 
    nome varchar (100) not null,
    sobrenome varchar (100) not null,
    endereco varchar (100) not null,
    email varchar (100) not null,
    celular int (11) not null,
    data_nascimento date not null,
    senha_conta varchar (20) not null,
    cpf int (11) not null,
    primary key (id_usuario)
);

/*
create table usuario_instituicao (
    id_usuariofk int,
    id_instituicaofk int,
    primary key (id_usuariofk),
    foreign key(id_usuariofk) references usuario(id)
);
*/

create table instituicao(
    id_instituicao int unsigned not null auto_increment,
    nome varchar (100) not null,
    endereco varchar (100) not null,
    email varchar (100) not null,
    telefone int (10) not null,
    senha_conta varchar (20) not null,
    cnpj int (14) not null,
    primary key (id_instituicao)
    );

/*
create table instituicao_animal (
    id_instituicaofk int,
    id_animalfk int,
    primary key (id_instituicaofk),
    foreign key(id_instituicaofk) references instituicao(id)
);
*/

create table animal(
    id_animal int unsigned not null auto_increment, 
    raca varchar (50) not null,
    especie varchar (50) not null,
    idade int (11) not null,
    sexo varchar (20) not null,
    primary key (id_animal)
);
