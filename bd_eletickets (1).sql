drop database if exists eletickets;
create database if not exists eletickets;

use eletickets;

create table usuario( 
    id int primary key AUTO_INCREMENT,
    usuario varchar(100) not null, 
    pass varchar(100) not null, 
    nombre varchar(100) not null, 
    apellido1 varchar(100) not null, 
    apellido2 varchar(100), 
    correo varchar(100) not null, 
    fecha_nac date not null, 
    pais varchar(100) not null, 
    cod_postal varchar(5) not null, 
    telefono varchar(100) not null, 
    rol varchar(100)
);

create table valoracion(
	id int primary key AUTO_INCREMENT,
    id_usuario int,
    id_espectaculo int,
    valoracion int(5),
    comentario varchar(10000)
);

create table espectaculo(
	id int primary key AUTO_INCREMENT,
    titulo varchar(1000) not null,
    tipo varchar(1000) not null CHECK (tipo='concierto' or tipo = 'teatro' or tipo='evento'),
    fecha date not null,
    ubicacion varchar(10000) not null,
    imagen longblob not null
);

alter table valoracion add constraint fk1_id_usuario foreign key (id_usuario) references
usuario(id) on update cascade on delete restrict;

alter table valoracion add constraint fk2_id_espectaculo foreign key (id_espectaculo) references
espectaculo(id) on update cascade on delete restrict;

------------------------------------------------------------------------
insert into usuario (id,usuario,nombre,pass,apellido1,apellido2,correo,fecha_nac,pais,cod_postal,telefono,rol) 
values("user1","user1","pass1","nombre1","apellido1","apellido1","correo1",'2002-01-02',"pais1","12345","666111111","administrador");
insert into usuario (id,usuario,nombre,pass,apellido1,apellido2,correo,fecha_nac,pais,cod_postal,telefono,rol)
values("user2","user2","pass2","nombre2","apellido2","apellido2","correo2",'2002-01-02',"pais2","12345","666111111","editor");
insert into usuario (id,usuario,nombre,pass,apellido1,apellido2,correo,fecha_nac,pais,cod_postal,telefono,rol)
values("user3","user3","pass3","nombre3","apellido3","apellido3","correo3",'2002-01-02',"pais3","12345","666111111","administrador");
insert into usuario (id,usuario,nombre,pass,apellido1,apellido2,correo,fecha_nac,pais,cod_postal,telefono,rol)
values("user4","user4","pass4","nombre4","apellido4","apellido4","correo4",'2002-01-02',"pais4","12345","666111111","editor");
insert into usuario (id,usuario,nombre,pass,apellido1,apellido2,correo,fecha_nac,pais,cod_postal,telefono,rol)
values("user5","user5","pass5","nombre5","apellido5","apellido5","correo5",'2002-01-02',"pais5","12345","666111111","valorador");
insert into usuario (id,usuario,nombre,pass,apellido1,apellido2,correo,fecha_nac,pais,cod_postal,telefono,rol)
values("user6","user6","pass6","nombre6","apellido6","apellido6","correo6",'2002-01-02',"pais6","12345","666111111","administrador");



insert into espectaculo (titulo,tipo,fecha,ubicacion,imagen) values("espec2","concierto",'2021-02-22',"texto1","asdqe");
insert into espectaculo (titulo,tipo,fecha,ubicacion,imagen) values("espec3","evento",'2021-02-22',"texto1","asdqe");
insert into espectaculo (titulo,tipo,fecha,ubicacion,imagen) values("espec4","teatro",'2021-02-22',"texto1","asdqe");
insert into espectaculo (titulo,tipo,fecha,ubicacion,imagen) values("espec5","concierto",'2021-02-22',"texto1","asdqe");
insert into espectaculo (titulo,tipo,fecha,ubicacion,imagen) values("espec6","evento",'2021-02-22',"texto1","asdqe");
insert into espectaculo (titulo,tipo,fecha,ubicacion,imagen) values("espec7","concierto",'2021-02-22',"texto1","asdqe");