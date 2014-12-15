drop table if exists Persona;

/*==============================================================*/
/* Table: Persona                                               */
/*==============================================================*/
create table Persona
(
   id_rut               varchar(12) not null,
   iduser               int not null,
   nombre               varchar(100) not null,
   apellido_p           varchar(100) not null,
   apellido_m           varchar(100) not null,
   fecha_nacimiento     date not null,
   genero               enum('Sin definir','Masculino','Femenino') not null,
   direccion            varchar(1024) not null,
   id_comuna            int not null,
   id_provincia         int not null,
   id_region            int not null,
   telefono             int not null,
   primary key (id_rut)
);

alter table Persona add constraint FK_persona_login foreign key (iduser)
      references cruge_user (iduser) on delete cascade on update cascade;

alter table Persona add constraint FK_vive_comuna foreign key (id_comuna)
      references Comuna (id_comuna) on delete cascade on update cascade;





/* ALTER TABLE Cruge_user */

ALTER TABLE cruge_user ADD COLUMN persona_rut char(12);

alter table cruge_user add constraint FK_persona_login foreign key (persona_rut)
references Persona (id_rut) on delete cascade on update cascade;


INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`, `persona_rut`) VALUES
(1, NULL, NULL, 1418252105, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0, NULL),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0, NULL),
(3, 1418006447, NULL, NULL, 'pgsoto', 'pgsoto@alumnos.ubiobio.cl', 'decemu189', '68338a2e288b5ce9134d51cf5ba551a5', 1, 0, 0, NULL);
