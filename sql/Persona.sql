drop table if exists Persona;

/*==============================================================*/
/* Table: Persona                                               */
/*==============================================================*/
create table Persona
(
   RUT                  varchar(12) not null,
   iduser               int,
   id_comuna            int not null,
   nombre               varchar(100) not null,
   apellido_p           varchar(100) not null,
   apellido_m           varchar(100) not null,
   genero               enum('Sin definir','Masculino','Femenino') not null,
   direccion            varchar(1024) not null,
   telefono             int not null,
   fecha_nacimiento     date not null,
   primary key (RUT)
);

alter table Persona add constraint FK_persona_login foreign key (iduser)
      references cruge_user (iduser) on delete cascade on update cascade;

alter table Persona add constraint FK_vive_comuna foreign key (id_comuna)
      references Comuna (id_comuna) on delete cascade on update cascade;





/* ALTER TABLE Cruge_user */

ALTER TABLE cruge_user ADD COLUMN persona_rut char(12);

alter table cruge_user
add constraint fk_cruge_us_personal__persona foreign key (persona_rut)
references persona (rut)