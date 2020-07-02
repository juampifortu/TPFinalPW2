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

create table tipo_publicacion(
id_tipo integer,
nombre varchar(20),
primary key(id_tipo));

create table diario(
id_diario integer auto_increment,
id_tipo integer,
nombre varchar(20),
estado tinyint,
primary key(id_diario),
foreign key(estado) references estado(id_estado),
foreign key(id_tipo) references tipo_publicacion(id_tipo));

create table edicion(
id_edicion integer auto_increment,
id_tipo integer,
descripcion varchar(20),
estado tinyint,
id_diario integer,
primary key(id_edicion),
foreign key(id_diario) references diario(id_diario),
foreign key(estado) references estado(id_estado),
foreign key(id_tipo) references tipo_publicacion(id_tipo));

create table seccion(
id_seccion integer auto_increment,
id_tipo integer,
nombre varchar(20),
estado tinyint,
id_edicion integer,
primary key(id_seccion),
foreign key(id_edicion) references edicion(id_edicion),
foreign key(estado) references estado(id_estado),
foreign key(id_tipo) references tipo_publicacion(id_tipo));



create table noticia(
id_noticia integer auto_increment,
id_tipo integer,
titulo varchar(25),
cuerpo text,
url_imagen varchar(255),
estado tinyint,
id_seccion integer,
id_edicion integer,
id_diario integer,
primary key(id_noticia),
foreign key(estado) references estado(id_estado),
foreign key(id_edicion) references edicion(id_edicion),
foreign key(id_diario) references diario(id_diario),
foreign key(id_seccion) references seccion(id_seccion),
foreign key(id_tipo) references tipo_publicacion(id_tipo));



/*create table suscripcion(
id_suscripcion integer auto_increment,
fecha_inicio date,
duracion_en_meses integer,
id_usuario mediumint,
id_diario integer,
primary key(id_suscripcion),
foreign key(id_usuario) references usuario(id_usuario),
foreign key(id_diario) references diario(id_diario));*/

/*create table pago(
id_pago integer auto_increment ,
metodo_pago varchar(20),
importe integer,
id_suscripcion integer,
primary key(id_pago),
foreign key(id_suscripcion) references suscripcion(id_suscripcion));*/

/*create table compra_unitaria(
id_compra_unitaria integer,
id_usuario mediumint,
id_edicion integer,
id_pago integer,
primary key(id_compra_unitaria),
foreign key(id_usuario) references usuario(id_usuario),
foreign key(id_edicion) references edicion(id_edicion),
foreign key(id_pago) references pago(id_pago));*/

insert into grupo
(id_grupo,nombre_grupo)
values
(1,"administrador"),
(2,"contenidista"),
(3,"suscriptor");

insert into tipo_publicacion
(id_tipo, nombre)
values
(1,"diario"),
(2,"edicion"),
(3,"seccion"),
(4,"noticia");

insert into estado
(id_estado, descripcion)
values
(1, "Aprobado"),
(0, "Denegado");

/*la contraseña del admin es 123456*/
insert into usuario
(nombre, mail, contraseña, id_grupo)
values
("igna", "ignaa88@gmail.com", "e10adc3949ba59abbe56e057f20f883e", 1);



