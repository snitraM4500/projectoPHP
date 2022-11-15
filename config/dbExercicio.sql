drop database exercicio;
create database exercicio;

use  exercicio;

create table MARCA(
    marca_cod varchar(10) not null,
    marca_desc varchar(50),
    PRIMARY KEY (marca_cod)
);

create table CATEGORIA(
    categoria_cod int not null AUTO_INCREMENT,
    categoria_desc varchar(50),
    PRIMARY KEY (categoria_cod)
);
create table MODELO(
    modelo_cod varchar(10) not null,
    cod_marca varchar(10),
    modelo_desc varchar(50),
    FOREIGN KEY (cod_marca) REFERENCES MARCA(marca_cod),
    PRIMARY KEY (modelo_cod)
);
create table PESSOA(
    pessoa_cod int not null AUTO_INCREMENT,
    pessoa_nome  varchar(25),
    pessoa_bi   varchar(25),
    PRIMARY KEY (pessoa_cod)
);

create table VEICULO(
    veiculo_cod int not null AUTO_INCREMENT,
    veiculo_matricula varchar(15),
    cod_marca varchar(10),
    cod_modelo varchar(10),
    cod_categoria int,
    cod_titular int,
    FOREIGN KEY (cod_categoria) REFERENCES CATEGORIA(categoria_cod),
    FOREIGN KEY (cod_marca) REFERENCES MARCA(marca_cod),
    FOREIGN KEY (cod_modelo) REFERENCES MODELO(modelo_cod),
    FOREIGN KEY (cod_titular) REFERENCES PESSOA(pessoa_cod),
    PRIMARY KEY (veiculo_cod)
);
