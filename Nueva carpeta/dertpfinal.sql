-- create database tpfinal;
drop database if exists tpfinal ;
create  database tpfinal;
use tpfinal;

create table grupo(
id_grupo integer not null,
nombre_grupo varchar(20) not null,
primary key(id_grupo));

create table usuario(
id_usuario MEDIUMINT NOT NULL AUTO_INCREMENT,
nombre varchar(20) not null,
mail varchar(50) not null,
contraseña varchar(50) not null,
id_grupo integer not null,
primary key(id_usuario),
foreign key (id_grupo) references grupo(id_grupo));

create table permiso(
id_permiso integer,
descripcion varchar(25),
primary key(id_permiso));

create table tiene(
tiene_permiso varchar(5),
id_grupo integer,
id_permiso integer,
foreign key(id_grupo) references grupo(id_grupo),
foreign key(id_permiso) references permiso(id_permiso));

create table estado(
id_estado tinyint,
descripcion varchar(20),
primary key (id_estado)
);

create table diario(
id_diario integer auto_increment,
nombre varchar(20),
estado tinyint,
primary key(id_diario),
foreign key(estado) references estado(id_estado));

create table edicion(
id_edicion integer auto_increment,
descripcion varchar(20),
estado tinyint,
id_diario integer,
primary key(id_edicion),
foreign key(id_diario) references diario(id_diario),
foreign key(estado) references estado(id_estado));

create table seccion(
id_seccion integer auto_increment,
nombre varchar(20),
estado tinyint,
id_edicion integer,
primary key(id_seccion),
foreign key(id_edicion) references edicion(id_edicion),
foreign key(estado) references estado(id_estado));

create table noticia(
id_noticia integer auto_increment,
titulo varchar(25),
cuerpo text,
estado tinyint,
id_seccion integer,
id_edicion integer,
id_diario integer,
primary key(id_noticia),
foreign key(estado) references estado(id_estado),
foreign key(id_edicion) references edicion(id_edicion),
foreign key(id_diario) references diario(id_diario),
foreign key(id_seccion) references seccion(id_seccion));

create table suscripcion(
id_suscripcion integer auto_increment,
fecha_inicio date,
duracion_en_meses integer,
id_usuario MEDIUMINT,
id_diario integer,
primary key(id_suscripcion),
foreign key(id_usuario) references usuario(id_usuario),
foreign key(id_diario) references diario(id_diario));

create table pago(
id_pago integer auto_increment,
metodo_pago varchar(20),
importe integer,
id_suscripcion integer,
primary key(id_pago),
foreign key(id_suscripcion) references suscripcion(id_suscripcion));

create table compra_unitaria(
id_compra_unitaria integer,
id_usuario MEDIUMINT,
id_edicion integer,
id_pago integer,
primary key(id_compra_unitaria),
foreign key(id_usuario) references usuario(id_usuario),
foreign key(id_edicion) references edicion(id_edicion),
foreign key(id_pago) references pago(id_pago));

insert into grupo
(id_grupo,nombre_grupo)
values
(1,"administrador"),
(2,"contenidista"),
(3,"suscriptor");

insert into usuario
(nombre,mail,contraseña,id_grupo)
values
("ricardo","ricard@gmail.com",1234,1),
("esteban","esteban@hotmail.com",4321,2),
("pedro","pedrito123@gmail.com","pedro123",3),
("martin","martincho@hotmail.com","tincho123",3);

insert into estado
(id_estado, descripcion)
values
(1, "Aprobado"),
(0, "Denegado");

insert into permiso
(id_permiso,descripcion)
values
(1,"abm contenidistas y admin"),
(2,"visualizar noticias"),
(3,"abonar suscripcion"),
(4,"crear noticias");

insert into tiene
(tiene_permiso,id_grupo,id_permiso)
values
("si",2,2),
("no",1,1),
("si",3,3),
("no",2,4);

insert into diario
(nombre)
values
("la nacion"),
("ole"),
("clarin");

insert into edicion
(descripcion,estado,id_diario)
values
("hola",1,1),
("pepito",0,2),
("123",1,3);

insert into seccion
(nombre,estado,id_edicion)
values
("deportes",0,1),
("politica",1,2),
("entretenimiento",1,3);

insert into noticia
(titulo, cuerpo,estado)
values
("clases virtuales","la UNLaM dicta clases a distancia",0),
("clasesasdsd","la UNLaM dicta clases a dsdasdsdistancia",0),
("claasdsdsdsales","la UNLaM sdsddicta clsdsdsses a distancia",1);

insert into suscripcion
(fecha_inicio,duracion_en_meses,id_usuario,id_diario)
values
("2020-06-10",1,1,1),
("2020-07-18",3,3,2);

insert into pago
(metodo_pago,importe,id_suscripcion)
values
("tarjeta de credito",150,1),
("transferencia",120,2);

insert into compra_unitaria
(id_compra_unitaria,id_usuario,id_edicion,id_pago)
values
(1,2,1,1),
(2,3,1,2);




